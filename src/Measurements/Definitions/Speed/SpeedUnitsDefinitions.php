<?php

use Webboy\MeasurementUnits\Enums\Units\SpeedUnitEnum;
use Webboy\MeasurementUnits\Units\SpeedUnitDto;

return [
    // 🌍 SI Units (International System of Units)
    new SpeedUnitDto(
        id: SpeedUnitEnum::METER_PER_SECOND->value,
        name: 'Meter per Second',
        symbol: 'm/s',
        toBase: fn($x) => $x * 1,           // m/s → m/s
        fromBase: fn($x) => $x / 1          // m/s → m/s
    ),

    // ⚙️ Metric Units
    new SpeedUnitDto(
        id: SpeedUnitEnum::KILOMETER_PER_HOUR->value,
        name: 'Kilometer per Hour',
        symbol: 'km/h',
        toBase: fn($x) => $x / 3.6,         // km/h → m/s
        fromBase: fn($x) => $x * 3.6        // m/s → km/h
    ),

    // 🇺🇸 Imperial/US Customary Units
    new SpeedUnitDto(
        id: SpeedUnitEnum::MILE_PER_HOUR->value,
        name: 'Mile per Hour',
        symbol: 'mph',
        toBase: fn($x) => $x * 0.44704,     // mph → m/s
        fromBase: fn($x) => $x / 0.44704    // m/s → mph
    ),
    new SpeedUnitDto(
        id: SpeedUnitEnum::FOOT_PER_SECOND->value,
        name: 'Foot per Second',
        symbol: 'ft/s',
        toBase: fn($x) => $x * 0.3048,      // ft/s → m/s
        fromBase: fn($x) => $x / 0.3048     // m/s → ft/s
    ),

    // 🌊 Nautical Units
    new SpeedUnitDto(
        id: SpeedUnitEnum::KNOT->value,
        name: 'Knot',
        symbol: 'kn',
        toBase: fn($x) => $x * 0.514444,    // kn → m/s
        fromBase: fn($x) => $x / 0.514444   // m/s → kn
    ),
];
