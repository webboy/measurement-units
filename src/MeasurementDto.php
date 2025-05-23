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
     * @var integer | string The ID of the measurement.
     */
    public int | string $id;

    /**
     * @var string The name of the measurement.
     */
    public string $name;

    /**
     * @var integer|string The base unit of the measurement.
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
     * @param integer|string                 $id           The ID of the measurement.
     * @param string                         $name         The name of the measurement.
     * @param integer|string|null            $base_unit_id The ID of the base unit.
     * @param array<int|string,UnitDto>|null $units        The units of the measurement.
     * @param array<int|string>|null         $validIds     The valid IDs of the measurement.
     * @throws InvalidMeasurementIdMeasurementException If the measurement ID is invalid.
     * @throws InvalidUnitDefinitionsMeasurementException If the unit definitions are invalid.
     * @throws InvalidUnitIdMeasurementException If the unit ID is invalid.
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
     * @param integer|float  $value  The value of the measurement.
     * @param integer|string $unitId The ID of the unit.
     * @return MeasurementValueDto
     * @throws IllegalInstantiationMeasurementValueException If the factory is called from an invalid class.
     * @throws InvalidUnitIdMeasurementException If the unit ID is invalid.
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
     * @throws InvalidUnitIdMeasurementException If the base unit ID is invalid.
     */
    public function getBaseUnit(): UnitDto
    {
        return $this->getUnit($this->base_unit_id);
    }

    /**
     * @param string|integer|null $unitId The ID of the unit to set as base.
     * @return void
     * @throws InvalidUnitIdMeasurementException If the unit ID is invalid.
     */
    public function setBaseUnit(string|int|null $unitId = null): void
    {
        if ($unitId !== null) {
            $this->base_unit_id = $unitId;
            $this->base_unit = $this->getBaseUnit();
        }
    }

    /**
     * Add a unit to the measurement.
     *
     * @param UnitDto $unit The unit to add.
     * @return void
     * @throws InvalidUnitIdMeasurementException If the unit ID is invalid and cannot be set as base.
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
     * @param UnitDto[] $units The units to add.
     * @return void
     * @throws InvalidUnitIdMeasurementException If a unit ID is invalid and cannot be set as base.
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
     * @param integer|string $unitId The ID of the unit.
     * @return UnitDto
     * @throws InvalidUnitIdMeasurementException If the unit ID is not found.
     */
    public function getUnit(int|string $unitId): UnitDto
    {
        if (isset($this->units[$unitId])) {
            return $this->units[$unitId];
        }

        throw new InvalidUnitIdMeasurementException($unitId);
    }
}
