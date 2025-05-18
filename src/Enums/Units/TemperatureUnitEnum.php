<?php

namespace Webboy\MeasurementUnits\Enums\Units;

use Closure;
use Webboy\MeasurementUnits\Enums\Interfaces\UnitEnumInterface;

/**
 * Enum representing common temperature units.
 */
enum TemperatureUnitEnum: int implements UnitEnumInterface
{
    // 🌡️ **Metric System (SI Units)**
    case KELVIN = 100;     // Base unit in thermodynamics
    // 🌍 **Commonly Used Units**
    case CELSIUS = 150;    // Standard in most countries
    case FAHRENHEIT = 200; // Used primarily in the USA

    // Labels
    /**
     * @return string
     */
    public function label(): string
    {
        return match ($this) {
            self::KELVIN => 'Kelvin',
            self::CELSIUS => 'Celsius',
            self::FAHRENHEIT => 'Fahrenheit',
        };
    }

    // Symbols

    /**
     * @return string
     */
    public function symbol(): string
    {
        return match ($this) {
            self::KELVIN => 'K',
            self::CELSIUS => '°C',
            self::FAHRENHEIT => '°F',
        };
    }

    // To base
    /**
     * @return Closure
     */
    public function toBase(): Closure
    {
        return match ($this) {
            self::KELVIN => fn ($value) => $value,
            self::CELSIUS => fn ($value) => $value + 273.15,
            self::FAHRENHEIT => fn ($value) => ($value - 32) * 5 / 9 + 273.15,
        };
    }

    // From base
    /**
     * @return Closure
     */
    public function fromBase(): Closure
    {
        return match ($this) {
            self::KELVIN => fn ($value) => $value,
            self::CELSIUS => fn ($value) => $value - 273.15,
            self::FAHRENHEIT => fn ($value) => ($value - 273.15) * 9 / 5 + 32,
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
