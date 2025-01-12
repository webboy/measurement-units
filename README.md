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
- `TimeMeasurementDto`
- `VolumeMeasurementDto`
- `PressureMeasurementDto`
- `EnergyMeasurementDto`
- `PowerMeasurementDto`
- `ForceMeasurementDto`
- `TorqueMeasurementDto`