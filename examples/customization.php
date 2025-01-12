<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Webboy\MeasurementUnits\Enums\Units\DistanceUnitEnum;
use Webboy\MeasurementUnits\Measurements\DistanceMeasurementDto;

// Create a new CUSTOM distance measurement with a custom base unit.
$measurement = new DistanceMeasurementDto(
    'Length',
    'ft',
    [
        // You can use a DistanceUnitEnum value as the ID.
        new Webboy\MeasurementUnits\Units\DistanceUnitDto(
            id: DistanceUnitEnum::FOOT->value,
            name: 'Feet',
            symbol: 'ft',
            toBase: fn($value) => $value,
            fromBase: fn($value) => $value,
        ),

        // You can use a custom ID, but then you must set validIds to false.
        new Webboy\MeasurementUnits\Units\DistanceUnitDto(
            id: 'meters',
            name: 'Meters',
            symbol: 'm',
            toBase: fn($value) => $value * 3.28084,
            fromBase: fn($value) => $value / 3.28084,
            validIds: false
        ),

        // You can use a CustomUnitDto to create a completely custom unit.
        new Webboy\MeasurementUnits\Units\CustomUnitDto(
            id: 'miles',
            name: 'Miles',
            symbol: 'mi',
            toBase: fn($value) => $value * 5280,
            fromBase: fn($value) => $value / 5280,
        )
    ]
);

// Set the value of the measurement.
$distance_value = $measurement->createValue(1000, 'meters');

// Print the distance value.
echo ("My distance in meters is: " . $distance_value . PHP_EOL);

// Convert the distance value to meters.
$converted_distance_value = $distance_value->to('miles');

// Print the converted distance value.
echo ("My distance in miles is: " . $converted_distance_value . PHP_EOL);
