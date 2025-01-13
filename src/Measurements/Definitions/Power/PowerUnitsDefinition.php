<?php


use Webboy\MeasurementUnits\Enums\Units\PowerUnitEnum;
use Webboy\MeasurementUnits\Units\PowerUnitDto;

return [
    // 🌍 SI Units (International System of Units)
    new PowerUnitDto(
        id: PowerUnitEnum::WATT->value,
        name: 'Watt',
        symbol: 'W',
        toBase: fn($x) => $x / 1_000,          // W → kW
        fromBase: fn($x) => $x * 1_000         // kW → W
    ),
    new PowerUnitDto(
        id: PowerUnitEnum::KILOWATT->value,
        name: 'Kilowatt',
        symbol: 'kW',
        toBase: fn($x) => $x * 1,             // kW → kW
        fromBase: fn($x) => $x / 1            // kW → kW
    ),
    new PowerUnitDto(
        id: PowerUnitEnum::MEGAWATT->value,
        name: 'Megawatt',
        symbol: 'MW',
        toBase: fn($x) => $x * 1_000,        // MW → kW
        fromBase: fn($x) => $x / 1_000       // kW → MW
    ),

    // ⚙️ Metric Units
    new PowerUnitDto(
        id: PowerUnitEnum::HORSEPOWER->value,
        name: 'Horsepower',
        symbol: 'HP',
        toBase: fn($x) => $x * 0.7457,       // HP → kW
        fromBase: fn($x) => $x / 0.7457      // kW → HP
    ),

    // 🇺🇸 Imperial/US Customary Units
    new PowerUnitDto(
        id: PowerUnitEnum::BTU_PER_HOUR->value,
        name: 'BTU per hour',
        symbol: 'BTU/h',
        toBase: fn($x) => $x * 0.000293071,  // BTU/h → kW
        fromBase: fn($x) => $x / 0.000293071 // kW → BTU/h
    ),
];
