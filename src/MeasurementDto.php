<?php

namespace Webboy\MeasurementUnits;

use ReflectionClass;
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
    protected int | string $base_unit_id;

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
     * @param int|string|null $base_unit_id The ID of the base unit.
     * @param array|null $units The units of the measurement.
     * @param array|null $validIds The valid IDs of the measurement.
     * @throws InvalidMeasurementIdMeasurementException
     * @throws InvalidUnitDefinitionsMeasurementException
     * @throws InvalidUnitIdMeasurementException
     */
    public function __construct(
        int | string $id,
        string $name,
        int | string $base_unit_id = null,
        ?array $units = null,
        private readonly ?array $validIds = null,
    ) {
        //Validate ID
        if ($this->validIds !== null && !in_array($id, $this->validIds, true)) {
            throw new InvalidMeasurementIdMeasurementException($id);
        }

        $this->id = $id;
        $this->name = $name;

        //Add units
        if ($units === null) {
            throw new InvalidUnitDefinitionsMeasurementException();
        }
        $this->addUnits($units);

        //Set base unit
        $this->setBaseUnit($base_unit_id);
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
     * @throws InvalidUnitIdMeasurementException
     */
    public function getBaseUnit(): UnitDto
    {
        return $this->getUnit($this->base_unit_id);
    }

    /**
     * @throws InvalidUnitIdMeasurementException
     */
    public function setBaseUnit($unitId = null): void
    {
        if ($unitId !== null) {
            $this->base_unit_id = $unitId;
            $this->base_unit = $this->getBaseUnit();
        }
    }

    /**
     * Add a unit to the measurement.
     *
     * @param UnitDto $unit
     * @throws InvalidUnitIdMeasurementException
     */
    private function addUnit(UnitDto $unit): void
    {
        $this->units[$unit->id] = $unit;

        // Set the base unit if it is not already set
        if ($unit->isBase) {
            $this->setBaseUnit($unit->id);
        }
    }

    /**
     * @param UnitDto[] $units
     * @return void
     * @throws InvalidUnitIdMeasurementException
     */
    private function addUnits(array $units): void
    {
        foreach ($units as $unit) {
            $this->addUnit($unit);
        }
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
        if (isset($this->units[$unitId]) && $this->units[$unitId] instanceof UnitDto) {
            return $this->units[$unitId];
        }

        throw new InvalidUnitIdMeasurementException($unitId);
    }
}
