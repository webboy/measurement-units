<?php

namespace Webboy\MeasurementUnits;

use Webboy\MeasurementUnits\Exceptions\MeasurementValueExceptions\IllegalInstantiationMeasurementValueException;

/**
 * The base class for all measurement value DTOs.
 */
class MeasurementValueDto
{
    public int | float $value;

    public UnitDto $unit;

    public MeasurementDto $measurement;

    protected function __construct(int | float $value, UnitDto $unit, MeasurementDto $measurement)
    {
        $this->value = $value;
        $this->unit = $unit;
        $this->measurement = $measurement;
    }

    /**
     * Factory method for instantiation, accessible only to a specific class.
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