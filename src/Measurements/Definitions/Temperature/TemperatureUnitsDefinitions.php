<?php

use Webboy\MeasurementUnits\Enums\Units\TemperatureUnitEnum;
use Webboy\MeasurementUnits\Units\TemperatureUnitDto;

return [
    // 🌡️ SI Unit (Base Unit)
    new TemperatureUnitDto(
        id: TemperatureUnitEnum::KELVIN->value,
        name: 'Kelvin',
        symbol: 'K',
        toBase: fn($x) => $x,                // K → K
        fromBase: fn($x) => $x              // K → K
    ),

    // 🌍 Celsius (Metric)
    new TemperatureUnitDto(
        id: TemperatureUnitEnum::CELSIUS->value,
        name: 'Celsius',
        symbol: '°C',
        toBase: fn($x) => $x + 273.15,      // °C → K
        fromBase: fn($x) => $x - 273.15     // K → °C
    ),

    // 🇺🇸 Fahrenheit (Imperial/US Customary)
    new TemperatureUnitDto(
        id: TemperatureUnitEnum::FAHRENHEIT->value,
        name: 'Fahrenheit',
        symbol: '°F',
        toBase: fn($x) => ($x - 32) * (5 / 9) + 273.15,   // °F → K
        fromBase: fn($x) => ($x - 273.15) * (9 / 5) + 32  // K → °F
    ),
];
