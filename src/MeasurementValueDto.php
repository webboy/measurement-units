<?php

namespace Webboy\MeasurementUnits;

use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidUnitIdMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementValueExceptions\IllegalInstantiationMeasurementValueException;
use Webboy\MeasurementUnits\Exceptions\UnitConverterExceptions\InvalidConversionParameterConverterException;
use Webboy\MeasurementUnits\Exceptions\UnitConverterExceptions\InvalidTargetUnitIdUnitConverterException;
use Webboy\MeasurementUnits\Exceptions\UnitExceptions\InvalidUnitIdUnitException;

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
     * @throws InvalidUnitIdMeasurementException
     */
    protected function __construct(int | float $value, UnitDto $unit, MeasurementDto $measurement)
    {
        $this->value = $value;
        $this->unit = $measurement->getUnit($unit->id);
        $this->measurement = $measurement;
    }

    /**
     * Create a new measurement value DTO from a factory.
     *
     * @param int | float $value The value of the measurement.
     * @param UnitDto $unit The unit of the measurement.
     * @param MeasurementDto $measurement The measurement of the value.
     * @param string $caller The class that called the factory.
     * @return MeasurementValueDto The new measurement value DTO.
     * @throws IllegalInstantiationMeasurementValueException
     * @throws InvalidUnitIdMeasurementException
     */
    public static function createFromFactory(int | float $value, UnitDto $unit, MeasurementDto $measurement, string $caller): MeasurementValueDto
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
     * @param mixed ...$args The arguments to pass to the conversion functions.
     * @return MeasurementValueDto The new measurement value DTO.
     * @throws InvalidTargetUnitIdUnitConverterException
     * @throws IllegalInstantiationMeasurementValueException
     * @throws InvalidUnitIdMeasurementException
     * @throws InvalidConversionParameterConverterException
     */
    public function to(int | string $unit_id, ...$args): MeasurementValueDto
    {
        return UnitConverter::convert($this, $unit_id, ...$args);
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
