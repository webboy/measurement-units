<?php

use Webboy\MeasurementUnits\MeasurementDto;
use Webboy\MeasurementUnits\UnitDto;

require_once __DIR__ . '/../vendor/autoload.php';

class MyVolumeUnit extends UnitDto
{
    public function __construct()
    {
        parent::__construct(
            id:'my-volume-unit',
            name: 'My Volume Unit',
            symbol: 'mvu',
            toBase: fn($value) => $value,
            fromBase: fn($value) => $value,
            isBase: true,
            validIds: false
        );
    }
}

class MyKiloVolumeUnit extends UnitDto
{
    public function __construct()
    {
        parent::__construct(
            id:'my-kilo-volume-unit',
            name: 'My Kilo Volume Unit',
            symbol: 'Kmvu',
            toBase: fn($value) => $value * 1000,
            fromBase: fn($value) => $value / 1000,
        );
    }
}

class ImaginaryMeasurement extends MeasurementDto
{
    // It will load unit definitions from a Definitions/FuelCapacity/FuelCapacityDefinitions.php file.
    public function __construct()
    {
        parent::__construct(
            id: 'imaginary-measurement',
            name: 'ImaginaryMeasurement',
            units:[
                new MyVolumeUnit(),
                new MyKiloVolumeUnit()
            ]
        );
    }
}

// Create a new value with a custom measurement.
$measurement = new ImaginaryMeasurement();

$value = $measurement->createValue(100, 'my-volume-unit');

// Print the value.
echo ("My value in {$value->unit->symbol} is: " . $value . PHP_EOL);

// Convert value to my-kilo-volume-unit.
$converted_value = $value->to('my-kilo-volume-unit');

// Print the converted value.
echo ("My fuel value in {$converted_value->unit->symbol} is: " . $converted_value . PHP_EOL);
