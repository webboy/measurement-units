<?php

namespace Webboy\MeasurementUnits\Enums\Units;

use Closure;
use Webboy\MeasurementUnits\Enums\Interfaces\UnitEnumInterface;

/**
 * Enum representing common area units across various measurement systems.
 */
enum AreaUnitEnum: int implements UnitEnumInterface
{
    // 🌍 **Metric System (SI Units)**
    case SQUARE_MILLIMETER = 100;       // 1/1,000,000 m²
    case SQUARE_CENTIMETER = 101;       // 1/10,000 m²
    case SQUARE_METER = 102;            // Base unit
    case SQUARE_KILOMETER = 103;        // 1,000,000 m²
    case HECTARE = 104;                // 10,000 m²
    // 🇺🇸 **Imperial/US Customary Units**
    case SQUARE_INCH = 105;            // 1/144 ft²
    case SQUARE_FOOT = 106;            // 1/9 yd²
    case SQUARE_YARD = 107;            // 9 ft²
    case ACRE = 108;                   // 4,046.8564224 m²
    case SQUARE_MILE = 109;            // 640 acres
    // 📏 **Other Units**
    case ARE = 110;                    // 100 m² (commonly used in agriculture)


    // Labels
    /**
     * Provides a human-readable label for each unit.
     */
    public function label(): string
    {
        return match ($this) {
            self::SQUARE_MILLIMETER => 'Square Millimeter',
            self::SQUARE_CENTIMETER => 'Square Centimeter',
            self::SQUARE_METER => 'Square Meter',
            self::SQUARE_KILOMETER => 'Square Kilometer',
            self::HECTARE => 'Hectare',
            self::SQUARE_INCH => 'Square Inch',
            self::SQUARE_FOOT => 'Square Foot',
            self::SQUARE_YARD => 'Square Yard',
            self::ACRE => 'Acre',
            self::SQUARE_MILE => 'Square Mile',
            self::ARE => 'Are',
        };
    }

    // Symbols
    /**
     * Provides a symbol for each unit.
     */
    public function symbol(): string
    {
        return match ($this) {
            self::SQUARE_MILLIMETER => 'mm²',
            self::SQUARE_CENTIMETER => 'cm²',
            self::SQUARE_METER => 'm²',
            self::SQUARE_KILOMETER => 'km²',
            self::HECTARE => 'ha',
            self::SQUARE_INCH => 'in²',
            self::SQUARE_FOOT => 'ft²',
            self::SQUARE_YARD => 'yd²',
            self::ACRE => 'acre',
            self::SQUARE_MILE => 'mi²',
            self::ARE => 'are',
        };
    }

    // To base
    /**
     * Provides a closure to convert a value from this unit to the base unit.
     */
    public function toBase(): Closure
    {
        return match ($this) {
            self::SQUARE_MILLIMETER => fn ($value) => $value / 1_000_000,
            self::SQUARE_CENTIMETER => fn ($value) => $value / 10_000,
            self::SQUARE_METER => fn ($value) => $value,
            self::SQUARE_KILOMETER => fn ($value) => $value * 1_000_000,
            self::HECTARE => fn ($value) => $value * 10_000,
            self::SQUARE_INCH => fn ($value) => $value / 144,
            self::SQUARE_FOOT => fn ($value) => $value / 9,
            self::SQUARE_YARD => fn ($value) => $value * 9,
            self::ACRE => fn ($value) => $value * 4_046.8564224,
            self::SQUARE_MILE => fn ($value) => $value * 640,
            self::ARE => fn ($value) => $value * 100,
        };
    }

    // From base

    /**
     * Provides a closure to convert a value from the base unit to this unit.
     */
    public function fromBase(): Closure
    {
        return match ($this) {
            self::SQUARE_MILLIMETER => fn ($value) => $value * 1_000_000,
            self::SQUARE_CENTIMETER => fn ($value) => $value * 10_000,
            self::SQUARE_METER => fn ($value) => $value,
            self::SQUARE_KILOMETER => fn ($value) => $value / 1_000_000,
            self::HECTARE => fn ($value) => $value / 10_000,
            self::SQUARE_INCH => fn ($value) => $value * 144,
            self::SQUARE_FOOT => fn ($value) => $value * 9,
            self::SQUARE_YARD => fn ($value) => $value / 9,
            self::ACRE => fn ($value) => $value / 4_046.8564224,
            self::SQUARE_MILE => fn ($value) => $value / 640,
            self::ARE => fn ($value) => $value / 100,
        };
    }

    public function value(): int
    {
        return $this->value;
    }
}
