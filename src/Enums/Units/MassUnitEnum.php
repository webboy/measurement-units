<?php

namespace Webboy\MeasurementUnits\Enums\Units;

/**
 * Enum representing common mass units across various measurement systems.
 */
enum MassUnitEnum: string
{
    // ⚖️ **Metric System (SI Units)**
    case MILLIGRAM = 'mg';     // 1/1,000,000 kilogram
    case GRAM = 'g';           // 1/1,000 kilogram
    case KILOGRAM = 'kg';      // Base unit
    case TONNE = 't';          // 1,000 kilograms

    // 🇺🇸 **Imperial/US Customary Units**
    case OUNCE = 'oz';         // 1/16 pound
    case POUND = 'lb';         // 16 ounces
    case STONE = 'st';         // 14 pounds
    case SHORT_TON = 'ton';    // 2,000 pounds (US ton)
    case LONG_TON = 'lt';      // 2,240 pounds (UK ton)

    // ⚗️ **Other Units**
    case CARAT = 'ct';         // 0.2 grams (used for gemstones)
    case GRAIN = 'gr';         // 1/7000 pound
}
