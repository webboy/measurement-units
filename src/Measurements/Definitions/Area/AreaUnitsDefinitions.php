<?php

use Webboy\MeasurementUnits\Enums\Units\AreaUnitEnum;
use Webboy\MeasurementUnits\Units\AreaUnitDto;

return [
    // 🌍 Metric System (SI Units)
    new AreaUnitDto(
        id: AreaUnitEnum::SQUARE_MILLIMETER->value,
        name: 'Square Millimeter',
        symbol: 'mm2',
        toBase: fn($x) => $x / 1000000,   // mm² → m²
        fromBase: fn($x) => $x * 1000000  // m² → mm²
    ),
    new AreaUnitDto(
        id: AreaUnitEnum::SQUARE_CENTIMETER->value,
        name: 'Square Centimeter',
        symbol: 'cm2',
        toBase: fn($x) => $x / 10000,     // cm² → m²
        fromBase: fn($x) => $x * 10000    // m² → cm²
    ),
    new AreaUnitDto(
        id: AreaUnitEnum::SQUARE_METER->value,
        name: 'Square Meter',
        symbol: 'm2',
        toBase: fn($x) => $x * 1,         // m² → m²
        fromBase: fn($x) => $x / 1        // m² → m²
    ),
    new AreaUnitDto(
        id: AreaUnitEnum::SQUARE_KILOMETER->value,
        name: 'Square Kilometer',
        symbol: 'km2',
        toBase: fn($x) => $x * 1000000,   // km² → m²
        fromBase: fn($x) => $x / 1000000  // m² → km²
    ),
    new AreaUnitDto(
        id: AreaUnitEnum::HECTARE->value,
        name: 'Hectare',
        symbol: 'ha',
        toBase: fn($x) => $x * 10000,     // ha → m²
        fromBase: fn($x) => $x / 10000    // m² → ha
    ),

    // 🇺🇸 Imperial/US Customary Units
    new AreaUnitDto(
        id: AreaUnitEnum::SQUARE_INCH->value,
        name: 'Square Inch',
        symbol: 'in2',
        toBase: fn($x) => $x * 0.00064516,   // in² → m²
        fromBase: fn($x) => $x / 0.00064516  // m² → in²
    ),
    new AreaUnitDto(
        id: AreaUnitEnum::SQUARE_FOOT->value,
        name: 'Square Foot',
        symbol: 'ft2',
        toBase: fn($x) => $x * 0.092903,     // ft² → m²
        fromBase: fn($x) => $x / 0.092903    // m² → ft²
    ),
    new AreaUnitDto(
        id: AreaUnitEnum::SQUARE_YARD->value,
        name: 'Square Yard',
        symbol: 'yd2',
        toBase: fn($x) => $x * 0.836127,     // yd² → m²
        fromBase: fn($x) => $x / 0.836127    // m² → yd²
    ),
    new AreaUnitDto(
        id: AreaUnitEnum::ACRE->value,
        name: 'Acre',
        symbol: 'ac',
        toBase: fn($x) => $x * 4046.8564224, // ac → m²
        fromBase: fn($x) => $x / 4046.8564224 // m² → ac
    ),
    new AreaUnitDto(
        id: AreaUnitEnum::SQUARE_MILE->value,
        name: 'Square Mile',
        symbol: 'mi2',
        toBase: fn($x) => $x * 2589988.110336, // mi² → m²
        fromBase: fn($x) => $x / 2589988.110336 // m² → mi²
    ),

    // 📏 Other Units
    new AreaUnitDto(
        id: AreaUnitEnum::ARE->value,
        name: 'Are',
        symbol: 'a',
        toBase: fn($x) => $x * 100,        // a → m²
        fromBase: fn($x) => $x / 100       // m² → a
    ),
];
