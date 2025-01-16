<?php

namespace Webboy\MeasurementUnits\Enums\Units;

use Closure;

enum PowerUnitEnum: string
{
    // 🌍 **SI Units (International System of Units)**
    case WATT = 'W';            // 1 Watt (Base SI unit)
    case KILOWATT = 'kW';       // 1,000 Watts
    case MEGAWATT = 'MW';       // 1,000,000 Watts

    // ⚙️ **Metric Units**
    case HORSEPOWER = 'HP';     // ~745.7 Watts

    // 🇺🇸 **Imperial/US Customary Units**
    case BTU_PER_HOUR = 'BTU/h'; // ~0.000293071 kW

    // Labels
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
    public function toBase(): Closure
    {
        return match ($this) {
            self::WATT => fn($value) => $value,
            self::KILOWATT => fn($value) => $value * 1000,
            self::MEGAWATT => fn($value) => $value * 1000000,
            self::HORSEPOWER => fn($value) => $value * 745.7,
            self::BTU_PER_HOUR => fn($value) => $value * 0.000293071,
        };
    }

    // From base
    public function fromBase(): Closure
    {
        return match ($this) {
            self::WATT => fn($value) => $value,
            self::KILOWATT => fn($value) => $value / 1000,
            self::MEGAWATT => fn($value) => $value / 1000000,
            self::HORSEPOWER => fn($value) => $value / 745.7,
            self::BTU_PER_HOUR => fn($value) => $value / 0.000293071,
        };
    }
}
