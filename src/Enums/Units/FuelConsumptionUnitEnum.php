<?php

namespace Webboy\MeasurementUnits\Enums\Units;

use Closure;
use Webboy\MeasurementUnits\Enums\Interfaces\UnitEnumInterface;

enum FuelConsumptionUnitEnum: int implements UnitEnumInterface
{
    // 🌍 **SI/Metric Units**
    case LITERS_PER_100KM = 100;   // Liters per 100 kilometers - Base unit
    case KILOMETERS_PER_LITER = 101;  // Kilometers per liter

    // 🇺🇸 **Imperial/US Customary Units**
    case MILES_PER_GALLON_US = 102; // Miles per gallon (US)
    case MILES_PER_GALLON_UK = 103; // Miles per gallon (UK)

    // Labels

    public function label(): string
    {
        return match ($this) {
            self::LITERS_PER_100KM => 'Liters per 100 Kilometers',
            self::KILOMETERS_PER_LITER => 'Kilometers per Liter',
            self::MILES_PER_GALLON_US => 'Miles per Gallon (US)',
            self::MILES_PER_GALLON_UK => 'Miles per Gallon (UK)',
        };
    }

    // Symbols

    public function symbol(): string
    {
        return match ($this) {
            self::LITERS_PER_100KM => 'L/100km',
            self::KILOMETERS_PER_LITER => 'km/L',
            self::MILES_PER_GALLON_US => 'mpg (US)',
            self::MILES_PER_GALLON_UK => 'mpg (UK)',
        };
    }

    // To base

    public function toBase(): Closure
    {
        return match ($this) {
            self::LITERS_PER_100KM => fn ($value) => $value,
            self::KILOMETERS_PER_LITER => fn ($value) => 100 / $value,
            self::MILES_PER_GALLON_US => fn ($value) => 235.214583 / $value,
            self::MILES_PER_GALLON_UK => fn ($value) => 282.481 / $value,
        };
    }

    // From base

    public function fromBase(): Closure
    {
        return match ($this) {
            self::LITERS_PER_100KM => fn ($value) => $value,
            self::KILOMETERS_PER_LITER => fn ($value) => 100 / $value,
            self::MILES_PER_GALLON_US => fn ($value) => 235.214583 / $value,
            self::MILES_PER_GALLON_UK => fn ($value) => 282.481 / $value,
        };
    }

    public function value(): int
    {
        return $this->value;
    }
}
