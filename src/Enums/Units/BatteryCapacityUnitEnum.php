<?php

namespace Webboy\MeasurementUnits\Enums\Units;

/**
 * Enum representing common battery capacity units.
 */
enum BatteryCapacityUnitEnum: string
{
    // 🔋 **Standard Units**
    case MILLIAMPERE_HOUR = 'mAh';   // 1/1000 Ampere-hour
    case AMPERE_HOUR = 'Ah';         // Ampere-hour

    // ⚡ **Energy-Based Units**
    case WATT_HOUR = 'Wh';           // Depends on voltage (Wh = Ah × V)
    case KILOWATT_HOUR = 'kWh';      // 1,000 Wh // Base unit
}
