<?php

namespace Webboy\MeasurementUnits\Enums\Units;

/**
 * Enum representing common speed units across various measurement systems.
 */
enum SpeedUnitEnum: string
{
    // 🌍 **SI Units (International System of Units)**
    case METER_PER_SECOND = 'm_s';   // Base unit

    // ⚙️ **Metric Units**
    case KILOMETER_PER_HOUR = 'km_h'; // Common for vehicle speeds

    // 🇺🇸 **Imperial/US Customary Units**
    case MILE_PER_HOUR = 'mi_h';     // Common for road speed in the US/UK
    case FOOT_PER_SECOND = 'ft_s';   // Used in scientific contexts

    // 🌊 **Nautical Units**
    case KNOT = 'kn';                // Nautical mile per hour
}
