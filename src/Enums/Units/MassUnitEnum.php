<?php

namespace Webboy\MeasurementUnits\Enums\Units;

use Closure;

/**
 * Enum representing common mass units across various measurement systems.
 */
enum MassUnitEnum: int
{
    // ⚖️ **Metric System (SI Units)**
    case MILLIGRAM = 100;     // 1/1,000,000 kilogram
    case GRAM = 110;          // 1/1,000 kilogram
    case KILOGRAM = 120;      // Base unit
    case TONNE = 130;         // 1,000 kilograms
// 🇺🇸 **Imperial/US Customary Units**
    case OUNCE = 140;         // 1/16 pound
    case POUND = 150;         // 16 ounces
    case STONE = 160;         // 14 pounds
    case SHORT_TON = 170;     // 2,000 pounds (US ton)
    case LONG_TON = 180;      // 2,240 pounds (UK ton)
// ⚗️ **Other Units**
    case CARAT = 190;         // 0.2 grams (used for gemstones)
    case GRAIN = 200;         // 1/7000 pound

    // Labels
    /**
     * Provides a human-readable label for each unit.
     */

    public function label(): string
    {
        return match ($this) {
            self::MILLIGRAM => 'Milligram',
            self::GRAM => 'Gram',
            self::KILOGRAM => 'Kilogram',
            self::TONNE => 'Tonne',
            self::OUNCE => 'Ounce',
            self::POUND => 'Pound',
            self::STONE => 'Stone',
            self::SHORT_TON => 'Short Ton',
            self::LONG_TON => 'Long Ton',
            self::CARAT => 'Carat',
            self::GRAIN => 'Grain',
        };
    }

    // Symbols

    /**
     * Provides a symbol for each unit.
     */
    public function symbol(): string
    {
        return match ($this) {
            self::MILLIGRAM => 'mg',
            self::GRAM => 'g',
            self::KILOGRAM => 'kg',
            self::TONNE => 't',
            self::OUNCE => 'oz',
            self::POUND => 'lb',
            self::STONE => 'st',
            self::SHORT_TON => 'ton',
            self::LONG_TON => 'lt',
            self::CARAT => 'ct',
            self::GRAIN => 'gr',
        };
    }

    // To base

    /**
     * Provides a closure to convert a value from this unit to the base unit (kilogram).
     */
    public function toBase(): Closure
    {
        return match ($this) {
            self::MILLIGRAM => fn($value) => $value / 1000000,
            self::GRAM => fn($value) => $value / 1000,
            self::KILOGRAM => fn($value) => $value,
            self::TONNE => fn($value) => $value * 1000,
            self::OUNCE => fn($value) => $value / 35.274,
            self::POUND => fn($value) => $value / 2.205,
            self::STONE => fn($value) => $value * 6.35,
            self::SHORT_TON => fn($value) => $value * 907.185,
            self::LONG_TON => fn($value) => $value * 1016.047,
            self::CARAT => fn($value) => $value / 5000,
            self::GRAIN => fn($value) => $value / 15432.358,
        };
    }

    // From base

    /**
     * Provides a closure to convert a value from the base unit (kilogram) to this unit.
     */
    public function fromBase(): Closure
    {
        return match ($this) {
            self::MILLIGRAM => fn($value) => $value * 1000000,
            self::GRAM => fn($value) => $value * 1000,
            self::KILOGRAM => fn($value) => $value,
            self::TONNE => fn($value) => $value / 1000,
            self::OUNCE => fn($value) => $value * 35.274,
            self::POUND => fn($value) => $value * 2.205,
            self::STONE => fn($value) => $value / 6.35,
            self::SHORT_TON => fn($value) => $value / 907.185,
            self::LONG_TON => fn($value) => $value / 1016.047,
            self::CARAT => fn($value) => $value * 5000,
            self::GRAIN => fn($value) => $value * 15432.358,
        };
    }
}
