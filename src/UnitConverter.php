<?php

namespace Webboy\MeasurementUnits;

use ArgumentCountError;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidUnitIdMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementValueExceptions\IllegalInstantiationMeasurementValueException;
use Webboy\MeasurementUnits\Exceptions\UnitConverterExceptions\InvalidConversionParameterConverterException;
use Webboy\MeasurementUnits\Exceptions\UnitConverterExceptions\InvalidTargetUnitIdUnitConverterException;

/**
 * The class that converts measurement values between units.
 */
class UnitConverter
{
    /**
     * Convert a measurement value to a different unit.
     *
     * @param MeasurementValueDto $value          The value to convert.
     * @param int | string        $target_unit_id The ID of the target unit.
     * @param mixed               ...$args        The arguments to pass to the conversion functions.
     * @return MeasurementValueDto The converted value.
     * @throws InvalidTargetUnitIdUnitConverterException If the target unit ID is invalid.
     * @throws IllegalInstantiationMeasurementValueException If the factory is called from an invalid class.
     * @throws InvalidUnitIdMeasurementException If the unit ID is invalid for the measurement.
     * @throws InvalidConversionParameterConverterException If the conversion parameters are invalid.
     */
    public static function convert(MeasurementValueDto $value, int | string $target_unit_id, mixed ...$args): MeasurementValueDto
    {
        // Check if the $target_unit_id is in the list of measurement units.
        try {
            $target_unit = $value->measurement->getUnit($target_unit_id);
        } catch (InvalidUnitIdMeasurementException $e) {
            throw new InvalidTargetUnitIdUnitConverterException($e);
        }

        // Check if the units are the same
        if ($value->unit->id === $target_unit->id) {
            return $value;
        }

        try {
            //Do the conversion
            $base_value = $value->unit->getToBase()($value->value, ...$args);
            /** @var float $base_value */
            $converted_value = $target_unit->getFromBase()($base_value, ...$args);
            /** @var float $converted_value */
        } catch (ArgumentCountError $e) {
            throw new InvalidConversionParameterConverterException($e);
        }

        //Dynamically create a new MeasurementValueDto
        return $value->measurement->createValue($converted_value, $target_unit->id);
    }
}
