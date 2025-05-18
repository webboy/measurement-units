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
     * @return string
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
     * @return string
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
     * @return Closure
     */
    public function toBase(): Closure
    {
        return match ($this) {
            self::SQUARE_MILLIMETER => fn (float|int $value): float => (float)$value / 1_000_000,
            self::SQUARE_CENTIMETER => fn (float|int $value): float => (float)$value / 10_000,
            self::SQUARE_METER => fn (float|int $value): float => (float)$value,
            self::SQUARE_KILOMETER => fn (float|int $value): float => (float)$value * 1_000_000,
            self::HECTARE => fn (float|int $value): float => (float)$value * 10_000,
            self::SQUARE_INCH => fn (float|int $value): float => (float)$value / 144,
            self::SQUARE_FOOT => fn (float|int $value): float => (float)$value / 9,
            self::SQUARE_YARD => fn (float|int $value): float => (float)$value * 9,
            self::ACRE => fn (float|int $value): float => (float)$value * 4_046.8564224,
            self::SQUARE_MILE => fn (float|int $value): float => (float)$value * 640,
            self::ARE => fn (float|int $value): float => (float)$value * 100,
        };
    }

    // From base

    /**
     * Provides a closure to convert a value from the base unit to this unit.
     * @return Closure
     */
    public function fromBase(): Closure
    {
        return match ($this) {
            self::SQUARE_MILLIMETER => fn (float|int $value): float => (float)$value * 1_000_000,
            self::SQUARE_CENTIMETER => fn (float|int $value): float => (float)$value * 10_000,
            self::SQUARE_METER => fn (float|int $value): float => (float)$value,
            self::SQUARE_KILOMETER => fn (float|int $value): float => (float)$value / 1_000_000,
            self::HECTARE => fn (float|int $value): float => (float)$value / 10_000,
            self::SQUARE_INCH => fn (float|int $value): float => (float)$value * 144,
            self::SQUARE_FOOT => fn (float|int $value): float => (float)$value * 9,
            self::SQUARE_YARD => fn (float|int $value): float => (float)$value / 9,
            self::ACRE => fn (float|int $value): float => (float)$value / 4_046.8564224,
            self::SQUARE_MILE => fn (float|int $value): float => (float)$value / 640,
            self::ARE => fn (float|int $value): float => (float)$value / 100,
        };
    }

    /**
     * @return integer
     */
    public function value(): int
    {
        return $this->value;
    }
}
