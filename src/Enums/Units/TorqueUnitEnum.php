<?php

namespace Webboy\MeasurementUnits\Enums\Units;

/**
 * Enum representing common torque units across various measurement systems.
 */
enum TorqueUnitEnum: string
{
    // 🌍 **Metric System (SI Units)**
    case NEWTON_METER = 'nm';      // Base unit (N·m)
    case KILONEWTON_METER = 'knm'; // 1,000 N·m
    case NEWTON_CENTIMETER = 'ncm'; // 0.01 N·m

    // 🇺🇸 **Imperial/US Customary Units**
    case POUND_FOOT = 'lbft';      // Pound-foot (lbf·ft)
    case POUND_INCH = 'lbin';      // Pound-inch (lbf·in)
    case OUNCE_INCH = 'ozin';      // Ounce-inch (ozf·in)

    // ⚙️ **Other Units**
    case KILOGRAM_FORCE_METER = 'kgfm';   // Kilogram-force meter
    case KILOGRAM_FORCE_CENTIMETER = 'kgfcm'; // Kilogram-force centimeter
}
