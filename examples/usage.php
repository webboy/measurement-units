<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Webboy\MeasurementUnits\Enums\Units\DistanceUnitEnum;
use Webboy\MeasurementUnits\Measurements\DistanceMeasurementDto;

// Create a new distance measurement.
$measurement = new DistanceMeasurementDto();

// Set the value of the measurement.
$distance_value = $measurement->createValue(1000, DistanceUnitEnum::FOOT->value);

// Print the distance value.
echo ("My distance in feet is: " . $distance_value . PHP_EOL);

// Convert the distance value to meters.
$converted_distance_value = $distance_value->to(DistanceUnitEnum::MILE->value);

// Print the converted distance value.
echo ("My distance in miles is: " . $converted_distance_value . PHP_EOL);