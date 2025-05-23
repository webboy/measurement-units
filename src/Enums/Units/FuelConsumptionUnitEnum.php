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
    /**
     * @return string
     */
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
    /**
     * @return string
     */
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
    /**
     * @return Closure
     */
    public function toBase(): Closure
    {
        return match ($this) {
            self::LITERS_PER_100KM => fn (float|int $value): float => (float)$value,
            self::KILOMETERS_PER_LITER => fn (float|int $value): float => 100 / (float)$value,
            self::MILES_PER_GALLON_US => fn (float|int $value): float => 235.214583 / (float)$value,
            self::MILES_PER_GALLON_UK => fn (float|int $value): float => 282.481 / (float)$value,
        };
    }

    // From base
    /**
     * @return Closure
     */
    public function fromBase(): Closure
    {
        return match ($this) {
            self::LITERS_PER_100KM => fn (float|int $value): float => (float)$value,
            self::KILOMETERS_PER_LITER => fn (float|int $value): float => 100 / (float)$value,
            self::MILES_PER_GALLON_US => fn (float|int $value): float => 235.214583 / (float)$value,
            self::MILES_PER_GALLON_UK => fn (float|int $value): float => 282.481 / (float)$value,
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
