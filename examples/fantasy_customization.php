<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Webboy\MeasurementUnits\Measurements\CustomMeasurementDto;
use Webboy\MeasurementUnits\Units\CustomUnitDto;

// Create a new CUSTOM measurement with a custom base unit.
$wizardness = new CustomMeasurementDto(
    id:'Wizardness',
    name: 'Wizardness level',
    units: [
        new CustomUnitDto(
            'merlin',
            'Merlin',
            'MRLN',
            fn($value) => $value,
            fn($value) => $value,
            true
        ),
        new CustomUnitDto(
            'harry',
            'Harry',
            'HRRY',
            fn($value) => $value / 3.223,
            fn($value) => $value * 3.223,
        ),
        new CustomUnitDto(
            'gandalf',
            'Gandalf',
            'GND',
            fn($value) => $value * 2.122,
            fn($value) => $value / 2.122,
        ),
    ]
);

// Set the value of the measurement.
$wizardness_value = $wizardness->createValue(1, 'gandalf');

// Print the wizardness value.
echo ("My wizardness in gandalf is: " . $wizardness_value . PHP_EOL);

// Convert the wizardness value to harry.
$converted_wizardness_value = $wizardness_value->to('harry');

// Print the converted wizardness value.
echo ("My wizardness in harry is: " . $converted_wizardness_value . PHP_EOL);