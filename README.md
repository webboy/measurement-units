# Measurement Units

[![Latest Stable Version](https://img.shields.io/packagist/v/webboy/measurement-units.svg)](https://packagist.org/packages/webboy/measurement-units)
[![Total Downloads](https://img.shields.io/packagist/dt/webboy/measurement-units.svg)](https://packagist.org/packages/webboy/measurement-units)
[![Build Status](https://github.com/webboy/measurement-units/actions/workflows/php.yml/badge.svg)](https://github.com/webboy/measurement-units/actions)
[![Coverage Status](https://coveralls.io/repos/github/webboy/measurement-units/badge.svg?branch=main)](https://coveralls.io/github/webboy/measurement-units?branch=main)
[![PHP Version](https://img.shields.io/packagist/php-v/webboy/measurement-units.svg)](https://packagist.org/packages/webboy/measurement-units)
[![License](https://img.shields.io/packagist/l/webboy/measurement-units.svg)](https://packagist.org/packages/webboy/measurement-units)

Set of DTOs to deal with various physical units and conversions.


This repository contains a collection of Data Transfer Objects (DTOs) that are designed to handle various physical unit
representations and conversions effectively. The DTOs ensure consistent unit management, making it easier to work with
different measurement systems in software applications.

## Installation

To install the DTOs, you can use the following command:

```shell
composer require webboy/measurement-units
```

## Usage

The DTOs are designed to be easy to use and understand. Here is an example of how you can use the `Distance` DTO:

```php

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
```    
   
## Available DTOs 

The following DTOs are available in this package:

- `AreaMeasurementDto`
- `DistanceMeasurementDto`
- `MassMeasurementDto`
- `SpeedMeasurementDto`
- `TemperatureMeasurementDto`
- `VolumeMeasurementDto`
- `PressureMeasurementDto`
- `TorqueMeasurementDto`
- `PowerMeasurementDto`
- `FuelConsumptionMeasurementDto`
- `BatteryCapacityMeasurementDto`

## Customizing the DTOs

The DTOs are designed to be easily customizable. You can extend the DTOs to add new units or modify existing ones. Here is an example of how you can extend the `Distance` DTO:

```php
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
```

## Fancy Customization

You can also use the `CustomUnitDto` to create a completely custom unit. This allows you to define your own conversion
functions and custom units. Here is an example of how you can use the `CustomUnitDto`:

```php
use Webboy\MeasurementUnits\Measurements\CustomMeasurementDto;
use Webboy\MeasurementUnits\Units\CustomUnitDto;

// Create a new CUSTOM measurement with a custom base unit.
$wizardness = new CustomMeasurementDto(
    id:'Wizardness',
    name: 'Wizardness level',
    units: [
        // Set the base unit.
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
```

## Extending the DTOs

You can also extend the DTOs to add new functionality or modify existing behavior. Here is an example of how you can extend the `Distance` DTO:

```php
class FuelCapacity extends CustomMeasurementDto
{
    // It will load unit definitions from a Definitions/FuelCapacity/FuelCapacityDefinitions.php file.
    public function __construct()
    {
        parent::__construct(
            'fuel-capacity',
            'Fuel Capacity',
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
```

## Even more fancy extensions

You can also extend the existing units, or extend the basic units to create new ones. You can also create new DTOs that
extend the existing ones. Here is an example of how you can create your own measurements and units

```php
class MyVolumeUnit extends VolumeUnitDto
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

class MyKiloVolumeUnit extends CustomUnitDto
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

// Convert the fuel capacity value to liters.
$converted_value = $value->to('my-kilo-volume-unit');

// Print the converted fuel capacity value.
echo ("My fuel value in {$converted_value->unit->symbol} is: " . $converted_value . PHP_EOL);
```


## Testing

To run the tests, you can use the following command:

```shell
composer run-script test
```


## Contributing

If you would like to contribute to this project, please feel free to submit a pull request. We welcome contributions