<?php

namespace Webboy\MeasurementUnits\Enums\Units;

use Closure;

/**
 * Enum representing common volume units across various measurement systems with conversion capabilities.
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

    /**
     * Provides a human-readable label for each unit.
     */
    public function label(): string
    {
        return match ($this) {
            self::MILLILITER => 'Milliliter',
            self::CENTILITER => 'Centiliter',
            self::DECILITER => 'Deciliter',
            self::LITRE => 'Litre',
            self::CUBIC_METER => 'Cubic Meter',
            self::TEASPOON => 'Teaspoon',
            self::TABLESPOON => 'Tablespoon',
            self::FLUID_OUNCE => 'Fluid Ounce',
            self::CUP => 'Cup',
            self::PINT => 'Pint',
            self::QUART => 'Quart',
            self::GALLON => 'Gallon',
            self::GILL_UK => 'Gill (UK)',
            self::PINT_UK => 'Pint (UK)',
            self::QUART_UK => 'Quart (UK)',
            self::GALLON_UK => 'Gallon (UK)',
            self::CUBIC_INCH => 'Cubic Inch',
            self::CUBIC_FOOT => 'Cubic Foot',
            self::CUBIC_YARD => 'Cubic Yard',
        };
    }

    /**
     * Provides the symbol for each unit.
     */
    public function symbol(): string
    {
        // USe utf8 characters for symbols
        return match ($this) {
            self::MILLILITER => 'ml',
            self::CENTILITER => 'cl',
            self::DECILITER => 'dl',
            self::LITRE => 'l',
            self::CUBIC_METER => 'm³',
            self::TEASPOON => 'tsp',
            self::TABLESPOON => 'tbsp',
            self::FLUID_OUNCE => 'fl oz',
            self::CUP => 'cup',
            self::PINT => 'pt',
            self::QUART => 'qt',
            self::GALLON => 'gal',
            self::GILL_UK => 'gi (UK)',
            self::PINT_UK => 'pt (UK)',
            self::QUART_UK => 'qt (UK)',
            self::GALLON_UK => 'gal (UK)',
            self::CUBIC_INCH => 'in³',
            self::CUBIC_FOOT => 'ft³',
            self::CUBIC_YARD => 'yd³',
        };
    }

    /**
     * Converts a given value to the base unit (Litre).
     */
    public function toBase(): Closure
    {
        return match ($this) {
            self::MILLILITER => fn($value) => $value / 1000,
            self::CENTILITER => fn($value) => $value / 100,
            self::DECILITER => fn($value) => $value / 10,
            self::LITRE => fn($value) => $value,
            self::CUBIC_METER => fn($value) => $value * 1000,
            self::TEASPOON => fn($value) => $value * 0.00492892,
            self::TABLESPOON => fn($value) => $value * 0.0147868,
            self::FLUID_OUNCE => fn($value) => $value * 0.0295735,
            self::CUP => fn($value) => $value * 0.236588,
            self::PINT => fn($value) => $value * 0.473176,
            self::QUART => fn($value) => $value * 0.946353,
            self::GALLON => fn($value) => $value * 3.78541,
            self::GILL_UK => fn($value) => $value * 0.142065,
            self::PINT_UK => fn($value) => $value * 0.568261,
            self::QUART_UK => fn($value) => $value * 1.13652,
            self::GALLON_UK => fn($value) => $value * 4.54609,
            self::CUBIC_INCH => fn($value) => $value * 0.0163871,
            self::CUBIC_FOOT => fn($value) => $value * 28.3168,
            self::CUBIC_YARD => fn($value) => $value * 764.555,
        };
    }

    /**
     * Converts a value from the base unit (Litre) to the target unit.
     */
    public function fromBase(): Closure
    {
        return match ($this) {
            self::MILLILITER => fn($value) => $value * 1000,
            self::CENTILITER => fn($value) => $value * 100,
            self::DECILITER => fn($value) => $value * 10,
            self::LITRE => fn($value) => $value,
            self::CUBIC_METER => fn($value) => $value / 1000,
            self::TEASPOON => fn($value) => $value / 0.00492892,
            self::TABLESPOON => fn($value) => $value / 0.0147868,
            self::FLUID_OUNCE => fn($value) => $value / 0.0295735,
            self::CUP => fn($value) => $value / 0.236588,
            self::PINT => fn($value) => $value / 0.473176,
            self::QUART => fn($value) => $value / 0.946353,
            self::GALLON => fn($value) => $value / 3.78541,
            self::GILL_UK => fn($value) => $value / 0.142065,
            self::PINT_UK => fn($value) => $value / 0.568261,
            self::QUART_UK => fn($value) => $value / 1.13652,
            self::GALLON_UK => fn($value) => $value / 4.54609,
            self::CUBIC_INCH => fn($value) => $value / 0.0163871,
            self::CUBIC_FOOT => fn($value) => $value / 28.3168,
            self::CUBIC_YARD => fn($value) => $value / 764.555,
        };
    }
}
