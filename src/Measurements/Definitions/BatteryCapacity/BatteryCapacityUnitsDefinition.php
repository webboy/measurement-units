<?php

use Webboy\MeasurementUnits\Enums\Units\BatteryCapacityUnitEnum;
use Webboy\MeasurementUnits\Units\BatteryCapacityUnitDto;

return [
    // ⚡ Energy-Based Units (Base: kWh)
    new BatteryCapacityUnitDto(
        id: BatteryCapacityUnitEnum::KILOWATT_HOUR->value,
        name: 'Kilowatt-hour',
        symbol: 'kWh',
        toBase: fn($x) => $x * 1,          // kWh → kWh
        fromBase: fn($x) => $x / 1         // kWh → kWh
    ),
    new BatteryCapacityUnitDto(
        id: BatteryCapacityUnitEnum::WATT_HOUR->value,
        name: 'Watt-hour',
        symbol: 'Wh',
        toBase: fn($x) => $x / 1000,       // Wh → kWh
        fromBase: fn($x) => $x * 1000      // kWh → Wh
    ),

    // 🔋 Charge-Based Units (Require voltage for accurate conversion)
    new BatteryCapacityUnitDto(
        id: BatteryCapacityUnitEnum::AMPERE_HOUR->value,
        name: 'Ampere-hour',
        symbol: 'Ah',
        toBase: fn($x, $voltage) => ($x * $voltage) / 1000,  // Ah → kWh (Ah × V ÷ 1000)
        fromBase: fn($x, $voltage) => ($x * 1000) / $voltage // kWh → Ah
    ),
    new BatteryCapacityUnitDto(
        id: BatteryCapacityUnitEnum::MILLIAMPERE_HOUR->value,
        name: 'Milliampere-hour',
        symbol: 'mAh',
        toBase: fn($x, $voltage) => ($x * $voltage) / 1_000_000,  // mAh → kWh (mAh × V ÷ 1,000,000)
        fromBase: fn($x, $voltage) => ($x * 1_000_000) / $voltage // kWh → mAh
    ),
];
