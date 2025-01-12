<?php

namespace Webboy\MeasurementUnits;

use Webboy\MeasurementUnits\Exceptions\MeasurementValueExceptions\IllegalInstantiationMeasurementValueException;

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
}