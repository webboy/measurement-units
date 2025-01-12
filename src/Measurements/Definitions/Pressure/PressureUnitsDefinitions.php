<?php

use Webboy\MeasurementUnits\Enums\Units\PressureUnitEnum;
use Webboy\MeasurementUnits\Units\PressureUnitDto;

return [
    // 🌍 SI Units (International System of Units)
    new PressureUnitDto(
        id: PressureUnitEnum::PASCAL->value,
        name: 'Pascal',
        symbol: 'Pa',
        toBase: fn($x) => $x * 1,          // Pa → Pa
        fromBase: fn($x) => $x / 1         // Pa → Pa
    ),
    new PressureUnitDto(
        id: PressureUnitEnum::KILOPASCAL->value,
        name: 'Kilopascal',
        symbol: 'kPa',
        toBase: fn($x) => $x * 1_000,      // kPa → Pa
        fromBase: fn($x) => $x / 1_000     // Pa → kPa
    ),
    new PressureUnitDto(
        id: PressureUnitEnum::MEGAPASCAL->value,
        name: 'Megapascal',
        symbol: 'MPa',
        toBase: fn($x) => $x * 1_000_000,  // MPa → Pa
        fromBase: fn($x) => $x / 1_000_000 // Pa → MPa
    ),

    // ⚙️ Metric Units
    new PressureUnitDto(
        id: PressureUnitEnum::BAR->value,
        name: 'Bar',
        symbol: 'bar',
        toBase: fn($x) => $x * 100_000,    // bar → Pa
        fromBase: fn($x) => $x / 100_000   // Pa → bar
    ),
    new PressureUnitDto(
        id: PressureUnitEnum::MILLIBAR->value,
        name: 'Millibar',
        symbol: 'mbar',
        toBase: fn($x) => $x * 100,        // mbar → Pa
        fromBase: fn($x) => $x / 100       // Pa → mbar
    ),
    new PressureUnitDto(
        id: PressureUnitEnum::ATMOSPHERE->value,
        name: 'Atmosphere',
        symbol: 'atm',
        toBase: fn($x) => $x * 101_325,    // atm → Pa
        fromBase: fn($x) => $x / 101_325   // Pa → atm
    ),
    new PressureUnitDto(
        id: PressureUnitEnum::TORR->value,
        name: 'Torr',
        symbol: 'Torr',
        toBase: fn($x) => $x * 133.322,    // Torr → Pa
        fromBase: fn($x) => $x / 133.322   // Pa → Torr
    ),

    // 🇺🇸 Imperial/US Customary Units
    new PressureUnitDto(
        id: PressureUnitEnum::PSI->value,
        name: 'Pound per Square Inch',
        symbol: 'psi',
        toBase: fn($x) => $x * 6_894.76,   // psi → Pa
        fromBase: fn($x) => $x / 6_894.76  // Pa → psi
    ),
    new PressureUnitDto(
        id: PressureUnitEnum::PSF->value,
        name: 'Pound per Square Foot',
        symbol: 'psf',
        toBase: fn($x) => $x * 47.8803,    // psf → Pa
        fromBase: fn($x) => $x / 47.8803   // Pa → psf
    ),
    new PressureUnitDto(
        id: PressureUnitEnum::INHG->value,
        name: 'Inch of Mercury',
        symbol: 'inHg',
        toBase: fn($x) => $x * 3_386.389,  // inHg → Pa
        fromBase: fn($x) => $x / 3_386.389 // Pa → inHg
    ),
    new PressureUnitDto(
        id: PressureUnitEnum::MMHG->value,
        name: 'Millimeter of Mercury',
        symbol: 'mmHg',
        toBase: fn($x) => $x * 133.322,    // mmHg → Pa
        fromBase: fn($x) => $x / 133.322   // Pa → mmHg
    ),
];
