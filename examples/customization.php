<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Webboy\MeasurementUnits\Enums\Units\DistanceUnitEnum;
use Webboy\MeasurementUnits\Measurements\CustomMeasurementDto;
use Webboy\MeasurementUnits\Measurements\DistanceMeasurementDto;

// Create a new CUSTOM distance measurement with a custom base unit.
$measurement = new CustomMeasurementDto(
    'custom',
    'Length',
    'ft',
    [
        // You can use a DistanceUnitEnum value as the ID.
        new Webboy\MeasurementUnits\Units\DistanceUnitDto(DistanceUnitEnum::FOOT),

        // You can use a CustomUnitDto to create a completely custom unit.
        new Webboy\MeasurementUnits\Units\CustomUnitDto(
            id: 'miles',
            name: 'Miles',
            symbol: 'mi',
            toBase: fn($value) => $value * 5280,
            fromBase: fn($value) => $value / 5280,
            validIds: false
        )
    ]
);

// Set the value of the measurement.
$distance_value = $measurement->createValue(1000, DistanceUnitEnum::FOOT->value);

// Print the value.
echo ("My distance in feet is: " . $distance_value . PHP_EOL);

// Convert the value.
$converted_distance_value = $distance_value->to('miles');

// Print the converted value.
echo ("My distance in miles is: " . $converted_distance_value . PHP_EOL);
