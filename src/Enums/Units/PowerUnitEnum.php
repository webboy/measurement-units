<?php

namespace Webboy\MeasurementUnits\Enums\Units;

use Closure;
use Webboy\MeasurementUnits\Enums\Interfaces\UnitEnumInterface;

enum PowerUnitEnum: int implements UnitEnumInterface
{
    // 🌍 **SI Units (International System of Units)**
    case WATT = 100;            // 1 Watt (Base SI unit)
    case KILOWATT = 101;        // 1,000 Watts
    case MEGAWATT = 102;        // 1,000,000 Watts

    // ⚙️ **Metric Units**
    case HORSEPOWER = 103;      // ~745.7 Watts

    // 🇺🇸 **Imperial/US Customary Units**
    case BTU_PER_HOUR = 104;    // ~0.000293071 kW

    // Labels
    /**
     * @return string
     */
    public function label(): string
    {
        return match ($this) {
            self::WATT => 'Watt',
            self::KILOWATT => 'Kilowatt',
            self::MEGAWATT => 'Megawatt',
            self::HORSEPOWER => 'Horsepower',
            self::BTU_PER_HOUR => 'BTU per Hour',
        };
    }

    // Symbols
    /**
     * @return string
     */
    public function symbol(): string
    {
        return match ($this) {
            self::WATT => 'W',
            self::KILOWATT => 'kW',
            self::MEGAWATT => 'MW',
            self::HORSEPOWER => 'HP',
            self::BTU_PER_HOUR => 'BTU/h',
        };
    }

    // To base
    /**
     * @return Closure
     */
    public function toBase(): Closure
    {
        return match ($this) {
            self::WATT => fn (float|int $value): float => (float)$value,
            self::KILOWATT => fn (float|int $value): float => (float)$value * 1000,
            self::MEGAWATT => fn (float|int $value): float => (float)$value * 1000000,
            self::HORSEPOWER => fn (float|int $value): float => (float)$value * 745.7,
            self::BTU_PER_HOUR => fn (float|int $value): float => (float)$value * 0.000293071,
        };
    }

    // From base
    /**
     * @return Closure
     */
    public function fromBase(): Closure
    {
        return match ($this) {
            self::WATT => fn (float|int $value): float => (float)$value,
            self::KILOWATT => fn (float|int $value): float => (float)$value / 1000,
            self::MEGAWATT => fn (float|int $value): float => (float)$value / 1000000,
            self::HORSEPOWER => fn (float|int $value): float => (float)$value / 745.7,
            self::BTU_PER_HOUR => fn (float|int $value): float => (float)$value / 0.000293071,
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
