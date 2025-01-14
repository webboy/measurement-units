<?php

use Webboy\MeasurementUnits\Enums\Units\FuelConsumptionUnitEnum;
use Webboy\MeasurementUnits\Units\FuelConsumptionUnitDto;

return [
    // 🌍 SI/Metric Units
    new FuelConsumptionUnitDto(
        id: FuelConsumptionUnitEnum::LITERS_PER_100KM->value,
        name: 'Liters per 100 kilometers',
        symbol: 'L/100km',
        toBase: fn($x) => $x,                 // Base unit
        fromBase: fn($x) => $x               // Base unit
    ),
    new FuelConsumptionUnitDto(
        id: FuelConsumptionUnitEnum::KILOMETERS_PER_LITER->value,
        name: 'Kilometers per liter',
        symbol: 'km/L',
        toBase: fn($x) => 100 / $x,          // km/L → L/100km
        fromBase: fn($x) => 100 / $x         // L/100km → km/L
    ),

    // 🇺🇸 Imperial/US Customary Units
    new FuelConsumptionUnitDto(
        id: FuelConsumptionUnitEnum::MILES_PER_GALLON_US->value,
        name: 'Miles per gallon (US)',
        symbol: 'mpg (US)',
        toBase: fn($x) => 235.214583 / $x,   // mpg (US) → L/100km
        fromBase: fn($x) => 235.214583 / $x  // L/100km → mpg (US)
    ),
    new FuelConsumptionUnitDto(
        id: FuelConsumptionUnitEnum::MILES_PER_GALLON_UK->value,
        name: 'Miles per gallon (UK)',
        symbol: 'mpg (UK)',
        toBase: fn($x) => 282.480936 / $x,   // mpg (UK) → L/100km
        fromBase: fn($x) => 282.480936 / $x  // L/100km → mpg (UK)
    ),
];
