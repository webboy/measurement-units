<?php

namespace Webboy\MeasurementUnits\Enums\Units;

use Closure;
use Webboy\MeasurementUnits\Enums\Interfaces\UnitEnumInterface;

/**
 * Enum representing common speed units across various measurement systems.
 */
enum SpeedUnitEnum: int implements UnitEnumInterface
{
    // 🌍 **SI Units (International System of Units)**
    case METER_PER_SECOND = 100;   // Base unit

    // ⚙️ **Metric Units**
    case KILOMETER_PER_HOUR = 101; // Common for vehicle speeds

    // 🇺🇸 **Imperial/US Customary Units**
    case MILE_PER_HOUR = 102;     // Common for road speed in the US/UK
    case FOOT_PER_SECOND = 103;   // Used in scientific contexts

    // 🌊 **Nautical Units**
    case KNOT = 104;                // Nautical mile per hour

    // Labels
    /**
     * @return string
     */
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
    /**
     * @return string
     */
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
    /**
     * @return Closure
     */
    public function toBase(): Closure
    {
        return match ($this) {
            self::METER_PER_SECOND => fn (float|int $value): float => (float)$value,
            self::KILOMETER_PER_HOUR => fn (float|int $value): float => (float)$value / 3.6,
            self::MILE_PER_HOUR => fn (float|int $value): float => (float)$value / 2.237,
            self::FOOT_PER_SECOND => fn (float|int $value): float => (float)$value / 3.281,
            self::KNOT => fn (float|int $value): float => (float)$value / 1.944,
        };
    }

    // From base
    /**
     * @return Closure
     */
    public function fromBase(): Closure
    {
        return match ($this) {
            self::METER_PER_SECOND => fn (float|int $value): float => (float)$value,
            self::KILOMETER_PER_HOUR => fn (float|int $value): float => (float)$value * 3.6,
            self::MILE_PER_HOUR => fn (float|int $value): float => (float)$value * 2.237,
            self::FOOT_PER_SECOND => fn (float|int $value): float => (float)$value * 3.281,
            self::KNOT => fn (float|int $value): float => (float)$value * 1.944,
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
