<?php

namespace Webboy\MeasurementUnits\Enums\Units;

use Closure;

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

    // Labels
    public function label(): string
    {
        return match ($this) {
            self::METER_PER_SECOND => 'Meter per Second',
            self::KILOMETER_PER_HOUR => 'Kilometer per Hour',
            self::MILE_PER_HOUR => 'Mile per Hour',
            self::FOOT_PER_SECOND => 'Foot per Second',
            self::KNOT => 'Knot',
        };
    }

    // Symbols
    public function symbol(): string
    {
        return match ($this) {
            self::METER_PER_SECOND => 'm/s',
            self::KILOMETER_PER_HOUR => 'km/h',
            self::MILE_PER_HOUR => 'mi/h',
            self::FOOT_PER_SECOND => 'ft/s',
            self::KNOT => 'kn',
        };
    }

    // To base
    public function toBase(): Closure
    {
        return match ($this) {
            self::METER_PER_SECOND => fn($value) => $value,
            self::KILOMETER_PER_HOUR => fn($value) => $value / 3.6,
            self::MILE_PER_HOUR => fn($value) => $value / 2.237,
            self::FOOT_PER_SECOND => fn($value) => $value / 3.281,
            self::KNOT => fn($value) => $value / 1.944,
        };
    }

    // From base
    public function fromBase(): Closure
    {
        return match ($this) {
            self::METER_PER_SECOND => fn($value) => $value,
            self::KILOMETER_PER_HOUR => fn($value) => $value * 3.6,
            self::MILE_PER_HOUR => fn($value) => $value * 2.237,
            self::FOOT_PER_SECOND => fn($value) => $value * 3.281,
            self::KNOT => fn($value) => $value * 1.944,
        };
    }

}
