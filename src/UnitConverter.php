<?php

namespace Webboy\MeasurementUnits;

use Webboy\MeasurementUnits\Exceptions\MeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidUnitIdMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementValueExceptions\IllegalInstantiationMeasurementValueException;
use Webboy\MeasurementUnits\Exceptions\UnitConverterExceptions\InvalidTargetUnitIdUnitConverterException;

/**
 * The class that converts measurement values between units.
 */
class UnitConverter
{
    /**
     * Convert a measurement value to a different unit.
     *
     * @param MeasurementValueDto $value The value to convert.
     * @param int | string $target_unit_id The ID of the target unit.
     * @return MeasurementValueDto The converted value.
     * @throws InvalidTargetUnitIdUnitConverterException | IllegalInstantiationMeasurementValueException|InvalidUnitIdMeasurementException
     */
    public static function convert(MeasurementValueDto $value, int | string $target_unit_id): MeasurementValueDto
    {
        // Check if the $target_unit_id is in the list of measurement units.
        try{
            $target_unit = $value->measurement->getUnit($target_unit_id);
        } catch (InvalidUnitIdMeasurementException $e) {
            throw new InvalidTargetUnitIdUnitConverterException($e);
        }

        // Check if the units are the same
        if ($value->unit->id === $target_unit->id) {
            return $value;
        }

        //Do the conversion
        $base_value = $value->unit->getToBase()($value->value);
        $converted_value = $target_unit->getFromBase()($base_value);

        //Dynamically create a new MeasurementValueDto
        return $value->measurement->createValue($converted_value, $target_unit->id);
    }
}