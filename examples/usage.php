<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Webboy\MeasurementUnits\Measurements\DistanceMeasurementDto;

// Create a new distance measurement.
$measurement = new DistanceMeasurementDto();

// Set the value of the measurement.
$distance_value = $measurement->createValue(100, 'km');

// Print the distance value.
echo ("My distance in km is: " . $distance_value . PHP_EOL);

// Convert the distance value to meters.
$converted_distance_value = $distance_value->to('mi');

// Print the converted distance value.
echo ("My distance in miles is: " . $converted_distance_value . PHP_EOL);