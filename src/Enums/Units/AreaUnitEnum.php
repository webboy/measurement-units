<?php

namespace Webboy\MeasurementUnits\Enums\Units;

/**
 * Enum representing common area units across various measurement systems.
 */
enum AreaUnitEnum: string
{
    // 🌍 **Metric System (SI Units)**
    case SQUARE_MILLIMETER = 'sq_mm';     // 1/1,000,000 m²
    case SQUARE_CENTIMETER = 'sq_cm';     // 1/10,000 m²
    case SQUARE_METER = 'sq_m';           // Base unit
    case SQUARE_KILOMETER = 'sq_km';      // 1,000,000 m²
    case HECTARE = 'ha';                  // 10,000 m²

    // 🇺🇸 **Imperial/US Customary Units**
    case SQUARE_INCH = 'sq_in';           // 1/144 ft²
    case SQUARE_FOOT = 'sq_ft';           // 1/9 yd²
    case SQUARE_YARD = 'sq_yd';           // 9 ft²
    case ACRE = 'acre';                   // 4,046.8564224 m²
    case SQUARE_MILE = 'sq_mi';           // 640 acres

    // 📏 **Other Units**
    case ARE = 'are';                     // 100 m² (commonly used in agriculture)
}
