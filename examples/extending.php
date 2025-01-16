<?php

use Webboy\MeasurementUnits\Enums\Units\VolumeUnitEnum;
use Webboy\MeasurementUnits\Measurements\CustomMeasurementDto;

require_once __DIR__ . '/../vendor/autoload.php';

class FuelCapacity extends CustomMeasurementDto
{
    // It will load unit definitions from a Definitions/FuelCapacity/FuelCapacityDefinitions.php file.
    public function __construct()
    {
        parent::__construct(
            id:'fuel-capacity',
            name:'Fuel Capacity',
            base_unit_id:VolumeUnitEnum::LITRE->value,
            units: [
                new Webboy\MeasurementUnits\Units\VolumeUnitDto(VolumeUnitEnum::LITRE),
                new Webboy\MeasurementUnits\Units\VolumeUnitDto(VolumeUnitEnum::GALLON),
            ]

        );
    }
}

// Create a new value with a custom measurement.
$measurement = new FuelCapacity();

$fuel_capacity = $measurement->createValue(100, VolumeUnitEnum::GALLON->value);

// Print the fuel capacity value.
echo ("My fuel capacity in gallons is: " . $fuel_capacity . PHP_EOL);

// Convert the fuel capacity value to liters.
$converted_fuel_capacity = $fuel_capacity->to(VolumeUnitEnum::LITRE->value);

// Print the converted fuel capacity value.
echo ("My fuel capacity in liters is: " . $converted_fuel_capacity . PHP_EOL);
