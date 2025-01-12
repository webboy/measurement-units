<?php

use Webboy\MeasurementUnits\Enums\Units\MassUnitEnum;
use Webboy\MeasurementUnits\Units\MassUnitDto;

return [
    // ⚖️ Metric System (SI Units)
    new MassUnitDto(
        id: MassUnitEnum::MILLIGRAM->value,
        name: 'Milligram',
        symbol: 'mg',
        toBase: fn($x) => $x / 1_000_000,   // mg → kg
        fromBase: fn($x) => $x * 1_000_000 // kg → mg
    ),
    new MassUnitDto(
        id: MassUnitEnum::GRAM->value,
        name: 'Gram',
        symbol: 'g',
        toBase: fn($x) => $x / 1_000,       // g → kg
        fromBase: fn($x) => $x * 1_000      // kg → g
    ),
    new MassUnitDto(
        id: MassUnitEnum::KILOGRAM->value,
        name: 'Kilogram',
        symbol: 'kg',
        toBase: fn($x) => $x * 1,           // kg → kg
        fromBase: fn($x) => $x / 1          // kg → kg
    ),
    new MassUnitDto(
        id: MassUnitEnum::TONNE->value,
        name: 'Tonne',
        symbol: 't',
        toBase: fn($x) => $x * 1_000,       // t → kg
        fromBase: fn($x) => $x / 1_000      // kg → t
    ),

    // 🇺🇸 Imperial/US Customary Units
    new MassUnitDto(
        id: MassUnitEnum::OUNCE->value,
        name: 'Ounce',
        symbol: 'oz',
        toBase: fn($x) => $x * 0.0283495,   // oz → kg
        fromBase: fn($x) => $x / 0.0283495  // kg → oz
    ),
    new MassUnitDto(
        id: MassUnitEnum::POUND->value,
        name: 'Pound',
        symbol: 'lb',
        toBase: fn($x) => $x * 0.453592,    // lb → kg
        fromBase: fn($x) => $x / 0.453592   // kg → lb
    ),
    new MassUnitDto(
        id: MassUnitEnum::STONE->value,
        name: 'Stone',
        symbol: 'st',
        toBase: fn($x) => $x * 6.35029,     // st → kg
        fromBase: fn($x) => $x / 6.35029    // kg → st
    ),
    new MassUnitDto(
        id: MassUnitEnum::SHORT_TON->value,
        name: 'Short Ton',
        symbol: 'ton',
        toBase: fn($x) => $x * 907.18474,   // ton (US) → kg
        fromBase: fn($x) => $x / 907.18474  // kg → ton (US)
    ),
    new MassUnitDto(
        id: MassUnitEnum::LONG_TON->value,
        name: 'Long Ton',
        symbol: 'lt',
        toBase: fn($x) => $x * 1_016.0469,  // ton (UK) → kg
        fromBase: fn($x) => $x / 1_016.0469 // kg → ton (UK)
    ),

    // ⚗️ Other Units
    new MassUnitDto(
        id: MassUnitEnum::CARAT->value,
        name: 'Carat',
        symbol: 'ct',
        toBase: fn($x) => $x * 0.0002,      // ct → kg
        fromBase: fn($x) => $x / 0.0002     // kg → ct
    ),
    new MassUnitDto(
        id: MassUnitEnum::GRAIN->value,
        name: 'Grain',
        symbol: 'gr',
        toBase: fn($x) => $x * 0.00006479891, // gr → kg
        fromBase: fn($x) => $x / 0.00006479891 // kg → gr
    ),
];
