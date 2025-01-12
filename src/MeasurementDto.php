<?php

namespace Webboy\MeasurementUnits;

use ReflectionClass;
use Webboy\MeasurementUnits\Exceptions\MeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidBaseUnitIdMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidMeasurementIdMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidUnitDefinitionsMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidUnitIdMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementValueExceptions\IllegalInstantiationMeasurementValueException;

/**
 * The base class for all measurement DTOs.
 */
abstract class MeasurementDto
{
    /**
     * @var int | string The ID of the measurement.
     */
    public int | string $id;

    /**
     * @var string The name of the measurement.
     */
    public string $name;

    /**
     * @var int|string The base unit of the measurement.
     */
    public int | string $base_unit_id;

    /**
     * @var UnitDto[] The units of the measurement.
     */
    public array $units;

    /**
     * @var UnitDto The base unit of the measurement.
     */
    protected UnitDto $base_unit;

    /**
     * Create a new measurement DTO.
     *
     * @param int|string $id The ID of the measurement.
     * @param string $name The name of the measurement.
     * @param int|string $base_unit_id The ID of the base unit.
     * @param array|null $units The units of the measurement.
     * @param array|null $validIds The valid IDs of the measurement.
     * @throws MeasurementException
     */
    public function __construct(
        int | string $id,
        string $name,
        int | string $base_unit_id,
        ?array $units = null,
        private readonly ?array $validIds = null,
    ){
        //Validate ID
        if ($this->validIds !== null && !in_array($id, $this->validIds)) {
            throw new InvalidMeasurementIdMeasurementException($id);
        }

        $this->id = $id;
        $this->name = $name;
        $this->base_unit_id = $base_unit_id;
        $this->units = $units ?? $this->loadDefinitions();

        //Set base unit
        $this->base_unit = $this->getBaseUnit();
    }

    /**
     * Create a new measurement DTO from a factory.
     *
     * @param int|float $value
     * @param int|string $unitId
     * @return MeasurementValueDto
     * @throws IllegalInstantiationMeasurementValueException
     * @throws InvalidUnitIdMeasurementException
     */
    public function createValue(int | float $value, int | string $unitId): MeasurementValueDto
    {
        $unit = $this->getUnit($unitId);
        return MeasurementValueDto::createFromFactory($value, $unit, $this, $this::class);
    }

    /**
     * Get the base unit of the measurement.
     *
     * @return UnitDto
     * @throws InvalidBaseUnitIdMeasurementException
     */
    public function getBaseUnit(): UnitDto
    {
        $baseUnit = array_filter(
            $this->units,
            function(UnitDto $unit) {
                return $unit->id === $this->base_unit_id;
            }
        );

        $baseUnit = reset($baseUnit);

        if (empty($baseUnit)) {
            throw new InvalidBaseUnitIdMeasurementException($this->base_unit_id);
        }

        return $baseUnit;
    }

    /**
     * Load the definitions for the measurement.
     *
     * @return UnitDto[]
     * @throws InvalidUnitDefinitionsMeasurementException
     */
    protected function loadDefinitions(): array
    {
        $definitions = [];

        // Path to the definitions directory (adjust as needed if relative paths differ)
        $calledClass = new ReflectionClass(static::class);
        $definitionsPath = dirname($calledClass->getFileName())
            . '/Definitions/'
            . str_replace(
                'MeasurementDto',
                '',
                $calledClass->getShortName()
            );

        // Search for all PHP files in the directory
        foreach (glob($definitionsPath . '/*.php') as $definitionFile) {
            // Include the file and add the returned UnitDto object to the array
            $unitDefinition = include $definitionFile;

            if (!$unitDefinition instanceof UnitDto) {
                // Skip or handle improperly formatted files
                continue;
            }

            $definitions[] = $unitDefinition;
        }

        if (empty($definitions)) {
            throw new InvalidUnitDefinitionsMeasurementException();
        }

        return $definitions;

    }

    /**
     * Get a unit by its ID.
     *
     * @param int|string $unitId
     * @return UnitDto
     * @throws InvalidUnitIdMeasurementException
     */
    public function getUnit(int|string $unitId): UnitDto
    {
        foreach ($this->units as $unit) {
            if ($unit->id === $unitId) {
                return $unit;
            }
        }

        throw new InvalidUnitIdMeasurementException($unitId);
    }
}