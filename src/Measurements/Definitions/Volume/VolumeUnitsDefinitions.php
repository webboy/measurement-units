<?php

use Webboy\MeasurementUnits\Enums\Units\VolumeUnitEnum;
use Webboy\MeasurementUnits\Units\VolumeUnitDto;

return [
    // 🌍 Metric System (SI Units)
    new VolumeUnitDto(
        id: VolumeUnitEnum::MILLILITER->value,
        name: 'Milliliter',
        symbol: 'mL',
        toBase: fn($x) => $x / 1_000,       // mL → L
        fromBase: fn($x) => $x * 1_000      // L → mL
    ),
    new VolumeUnitDto(
        id: VolumeUnitEnum::CENTILITER->value,
        name: 'Centiliter',
        symbol: 'cL',
        toBase: fn($x) => $x / 100,         // cL → L
        fromBase: fn($x) => $x * 100        // L → cL
    ),
    new VolumeUnitDto(
        id: VolumeUnitEnum::DECILITER->value,
        name: 'Deciliter',
        symbol: 'dL',
        toBase: fn($x) => $x / 10,          // dL → L
        fromBase: fn($x) => $x * 10         // L → dL
    ),
    new VolumeUnitDto(
        id: VolumeUnitEnum::LITRE->value,
        name: 'Litre',
        symbol: 'L',
        toBase: fn($x) => $x * 1,           // L → L
        fromBase: fn($x) => $x / 1          // L → L
    ),
    new VolumeUnitDto(
        id: VolumeUnitEnum::CUBIC_METER->value,
        name: 'Cubic Meter',
        symbol: 'm³',
        toBase: fn($x) => $x * 1_000,       // m³ → L
        fromBase: fn($x) => $x / 1_000      // L → m³
    ),

    // 🇺🇸 Imperial/US Customary Units
    new VolumeUnitDto(
        id: VolumeUnitEnum::TEASPOON->value,
        name: 'Teaspoon',
        symbol: 'tsp',
        toBase: fn($x) => $x * 0.00492892,  // tsp → L
        fromBase: fn($x) => $x / 0.00492892 // L → tsp
    ),
    new VolumeUnitDto(
        id: VolumeUnitEnum::TABLESPOON->value,
        name: 'Tablespoon',
        symbol: 'tbsp',
        toBase: fn($x) => $x * 0.0147868,   // tbsp → L
        fromBase: fn($x) => $x / 0.0147868  // L → tbsp
    ),
    new VolumeUnitDto(
        id: VolumeUnitEnum::FLUID_OUNCE->value,
        name: 'Fluid Ounce',
        symbol: 'fl oz',
        toBase: fn($x) => $x * 0.0295735,   // fl oz → L
        fromBase: fn($x) => $x / 0.0295735  // L → fl oz
    ),
    new VolumeUnitDto(
        id: VolumeUnitEnum::CUP->value,
        name: 'Cup',
        symbol: 'cup',
        toBase: fn($x) => $x * 0.236588,    // cup → L
        fromBase: fn($x) => $x / 0.236588   // L → cup
    ),
    new VolumeUnitDto(
        id: VolumeUnitEnum::PINT->value,
        name: 'Pint',
        symbol: 'pt',
        toBase: fn($x) => $x * 0.473176,    // pt → L
        fromBase: fn($x) => $x / 0.473176   // L → pt
    ),
    new VolumeUnitDto(
        id: VolumeUnitEnum::QUART->value,
        name: 'Quart',
        symbol: 'qt',
        toBase: fn($x) => $x * 0.946353,    // qt → L
        fromBase: fn($x) => $x / 0.946353   // L → qt
    ),
    new VolumeUnitDto(
        id: VolumeUnitEnum::GALLON->value,
        name: 'Gallon (US)',
        symbol: 'gal',
        toBase: fn($x) => $x * 3.78541,     // gal → L
        fromBase: fn($x) => $x / 3.78541    // L → gal
    ),

    // 🇬🇧 Imperial (UK) Units
    new VolumeUnitDto(
        id: VolumeUnitEnum::GILL_UK->value,
        name: 'Gill (UK)',
        symbol: 'gi (UK)',
        toBase: fn($x) => $x * 0.142065,   // gi (UK) → L
        fromBase: fn($x) => $x / 0.142065  // L → gi (UK)
    ),

    new VolumeUnitDto(
        id: VolumeUnitEnum::PINT_UK->value,
        name: 'Pint (UK)',
        symbol: 'pt (UK)',
        toBase: fn($x) => $x * 0.568261,    // pt (UK) → L
        fromBase: fn($x) => $x / 0.568261   // L → pt (UK)
    ),

    new VolumeUnitDto(
        id: VolumeUnitEnum::QUART_UK->value,
        name: 'Quart (UK)',
        symbol: 'qt (UK)',
        toBase: fn($x) => $x * 1.13652,     // qt (UK) → L
        fromBase: fn($x) => $x / 1.13652    // L → qt (UK)
    ),

    new VolumeUnitDto(
        id: VolumeUnitEnum::GALLON_UK->value,
        name: 'Gallon (UK)',
        symbol: 'gal (UK)',
        toBase: fn($x) => $x * 4.54609,     // gal (UK) → L
        fromBase: fn($x) => $x / 4.54609    // L → gal (UK)
    ),

    // 🏗️ Other Units
    new VolumeUnitDto(
        id: VolumeUnitEnum::CUBIC_INCH->value,
        name: 'Cubic Inch',
        symbol: 'in³',
        toBase: fn($x) => $x * 0.0163871,   // in³ → L
        fromBase: fn($x) => $x / 0.0163871  // L → in³
    ),
    new VolumeUnitDto(
        id: VolumeUnitEnum::CUBIC_FOOT->value,
        name: 'Cubic Foot',
        symbol: 'ft³',
        toBase: fn($x) => $x * 28.3168,     // ft³ → L
        fromBase: fn($x) => $x / 28.3168    // L → ft³
    ),
    new VolumeUnitDto(
        id: VolumeUnitEnum::CUBIC_YARD->value,
        name: 'Cubic Yard',
        symbol: 'yd³',
        toBase: fn($x) => $x * 764.555,     // yd³ → L
        fromBase: fn($x) => $x / 764.555    // L → yd³
    ),
];
