<?php

namespace Webboy\MeasurementUnits;

use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidUnitIdMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementValueExceptions\IllegalInstantiationMeasurementValueException;
use Webboy\MeasurementUnits\Exceptions\UnitConverterExceptions\InvalidTargetUnitIdUnitConverterException;

/**
 * The base class for all measurement value DTOs.
 */
class MeasurementValueDto
{
    /**
     * @var int | float The value of the measurement.
     */
    public int | float $value;

    /**
     * @var UnitDto The unit of the measurement.
     */
    public UnitDto $unit;

    /**
     * @var MeasurementDto The measurement of the value.
     */
    public MeasurementDto $measurement;

    /**
     * Create a new measurement value DTO.
     *
     * @param int | float $value The value of the measurement.
     * @param UnitDto $unit The unit of the measurement.
     * @param MeasurementDto $measurement The measurement of the value.
     */
    protected function __construct(int | float $value, UnitDto $unit, MeasurementDto $measurement)
    {
        $this->value = $value;
        $this->unit = $unit;
        $this->measurement = $measurement;
    }

    /**
     * Create a new measurement value DTO from a factory.
     *
     * @param int | float $value The value of the measurement.
     * @param UnitDto $unit The unit of the measurement.
     * @param MeasurementDto $measurement The measurement of the value.
     * @param string $caller The class that called the factory.
     * @return static The new measurement value DTO.
     * @throws IllegalInstantiationMeasurementValueException
     */
    public static function createFromFactory(int | float $value, UnitDto $unit, MeasurementDto $measurement, string $caller): self
    {
        if ($caller !== get_class($measurement)) {
            throw new IllegalInstantiationMeasurementValueException();
        }

        return new self($value, $unit, $measurement);
    }

    /**
     * Convert the measurement value to a new unit.
     *
     * @param int|string $unit_id The ID of the target unit.
     * @return MeasurementValueDto The new measurement value DTO.
     * @throws InvalidTargetUnitIdUnitConverterException
     * @throws IllegalInstantiationMeasurementValueException
     * @throws InvalidUnitIdMeasurementException
     */
    public function to(int | string $unit_id): MeasurementValueDto
    {
        return UnitConverter::convert($this, $unit_id);
    }

    /**
     * Convert the measurement value to a new unit.
     * @return string The string representation of the measurement value.
     */
    public function __toString(): string
    {
        return $this->value . ' ' . $this->unit->symbol;
    }
}