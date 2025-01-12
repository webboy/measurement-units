<?php

namespace Webboy\MeasurementUnits;

use ReflectionClass;
use Webboy\MeasurementUnits\Enums\MeasurementEnum;
use Webboy\MeasurementUnits\Exceptions\MeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidBaseUnitIdMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidMeasurementIdMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidUnitDefinitionsMeasurementException;

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
     * @var class-string The class name of the unit enum.
     */
    protected string $unit_enum_class;

    /**
     * @var UnitDto The base unit of the measurement.
     */
    protected UnitDto $base_unit;

    /**
     * @throws MeasurementException
     */
    public function __construct(
        int | string $id,
        string $name,
        int | string $base_unit_id,
        ?array $units = null,
        private readonly bool $validateId = true
    ){
        //Validate ID
        if ($this->validateId) {
            if (MeasurementEnum::tryFrom($id) === null) {
                throw new InvalidMeasurementIdMeasurementException($id);
            }
        }

        //Validate base unit ID
        if($this->unit_enum_class::tryFrom($base_unit_id) === null) {
            throw new InvalidBaseUnitIdMeasurementException($base_unit_id);
        }

        $this->id = $id;
        $this->name = $name;
        $this->base_unit_id = $base_unit_id;
        $this->units = $units ?? $this->loadDefinitions();

        //Set base unit
        $this->base_unit = $this->getBaseUnit();
    }

    /**
     * @throws MeasurementException
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
     * @throws MeasurementException
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
}