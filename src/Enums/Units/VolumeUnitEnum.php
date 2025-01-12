<?php

namespace Webboy\MeasurementUnits\Enums\Units;

/**
 * Enum representing common volume units across various measurement systems.
 */
enum VolumeUnitEnum: string
{
    // 🌍 **Metric System (SI Units)**
    case MILLILITER = 'ml';   // 1/1,000 Liter
    case CENTILITER = 'cl';   // 1/100 Liter
    case DECILITER = 'dl';    // 1/10 Liter
    case LITRE = 'l';         // Base unit
    case CUBIC_METER = 'm3';  // 1,000 Liters

    // 🇺🇸 **Imperial/US Customary Units**
    case TEASPOON = 'tsp';    // ~4.92892 mL
    case TABLESPOON = 'tbsp'; // ~14.7868 mL
    case FLUID_OUNCE = 'fl_oz'; // ~29.5735 mL
    case CUP = 'cup';         // ~236.588 mL
    case PINT = 'pt';         // ~473.176 mL
    case QUART = 'qt';        // ~946.353 mL
    case GALLON = 'gal';      // ~3.78541 L

    // 🇬🇧 **Imperial (UK) Units**
    case GILL_UK = 'gi_uk';   // ~142.065 mL
    case PINT_UK = 'pt_uk';   // ~568.261 mL
    case QUART_UK = 'qt_uk';  // ~1.13652 L
    case GALLON_UK = 'gal_uk'; // ~4.54609 L

    // 🏗️ **Other Units**
    case CUBIC_INCH = 'in3';  // ~16.3871 mL
    case CUBIC_FOOT = 'ft3';  // ~28.3168 L
    case CUBIC_YARD = 'yd3';  // ~764.555 L
}
