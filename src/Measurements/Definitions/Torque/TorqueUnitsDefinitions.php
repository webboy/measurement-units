<?php

use Webboy\MeasurementUnits\Enums\Units\TorqueUnitEnum;
use Webboy\MeasurementUnits\Units\TorqueUnitDto;

return [
    // 🌍 Metric System (SI Units)
    new TorqueUnitDto(
        id: TorqueUnitEnum::NEWTON_METER->value,
        name: 'Newton Meter',
        symbol: 'N·m',
        toBase: fn($x) => $x * 1,          // N·m → N·m
        fromBase: fn($x) => $x / 1         // N·m → N·m
    ),
    new TorqueUnitDto(
        id: TorqueUnitEnum::KILONEWTON_METER->value,
        name: 'Kilonewton Meter',
        symbol: 'kN·m',
        toBase: fn($x) => $x * 1000,       // kN·m → N·m
        fromBase: fn($x) => $x / 1000      // N·m → kN·m
    ),
    new TorqueUnitDto(
        id: TorqueUnitEnum::NEWTON_CENTIMETER->value,
        name: 'Newton Centimeter',
        symbol: 'N·cm',
        toBase: fn($x) => $x / 100,        // N·cm → N·m
        fromBase: fn($x) => $x * 100       // N·m → N·cm
    ),

    // 🇺🇸 Imperial/US Customary Units
    new TorqueUnitDto(
        id: TorqueUnitEnum::POUND_FOOT->value,
        name: 'Pound-foot',
        symbol: 'lb·ft',
        toBase: fn($x) => $x * 1.3558179483314,  // lb·ft → N·m
        fromBase: fn($x) => $x / 1.3558179483314 // N·m → lb·ft
    ),
    new TorqueUnitDto(
        id: TorqueUnitEnum::POUND_INCH->value,
        name: 'Pound-inch',
        symbol: 'lb·in',
        toBase: fn($x) => $x * 0.1129848290276167,  // lb·in → N·m
        fromBase: fn($x) => $x / 0.1129848290276167 // N·m → lb·in
    ),
    new TorqueUnitDto(
        id: TorqueUnitEnum::OUNCE_INCH->value,
        name: 'Ounce-inch',
        symbol: 'oz·in',
        toBase: fn($x) => $x * 0.00706155183333,  // oz·in → N·m
        fromBase: fn($x) => $x / 0.00706155183333 // N·m → oz·in
    ),

    // ⚙️ Other Units
    new TorqueUnitDto(
        id: TorqueUnitEnum::KILOGRAM_FORCE_METER->value,
        name: 'Kilogram-force Meter',
        symbol: 'kgf·m',
        toBase: fn($x) => $x * 9.80665,     // kgf·m → N·m
        fromBase: fn($x) => $x / 9.80665    // N·m → kgf·m
    ),
    new TorqueUnitDto(
        id: TorqueUnitEnum::KILOGRAM_FORCE_CENTIMETER->value,
        name: 'Kilogram-force Centimeter',
        symbol: 'kgf·cm',
        toBase: fn($x) => $x * 0.0980665,   // kgf·cm → N·m
        fromBase: fn($x) => $x / 0.0980665  // N·m → kgf·cm
    ),
];
