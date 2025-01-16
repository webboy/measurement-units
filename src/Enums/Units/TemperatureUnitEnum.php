<?php

namespace Webboy\MeasurementUnits\Enums\Units;

use Closure;

/**
 * Enum representing common temperature units.
 */
enum TemperatureUnitEnum: string
{
    // 🌡️ **Metric System (SI Units)**
    case KELVIN = 'k';     // Base unit in thermodynamics

    // 🌍 **Commonly Used Units**
    case CELSIUS = 'c';    // Standard in most countries
    case FAHRENHEIT = 'f'; // Used primarily in the USA

    // Labels
    public function label(): string
    {
        return match ($this) {
            self::KELVIN => 'Kelvin',
            self::CELSIUS => 'Celsius',
            self::FAHRENHEIT => 'Fahrenheit',
        };
    }

    // Symbols

    public function symbol(): string
    {
        return match ($this) {
            self::KELVIN => 'K',
            self::CELSIUS => '°C',
            self::FAHRENHEIT => '°F',
        };
    }

    // To base
    public function toBase(): Closure
    {
        return match ($this) {
            self::KELVIN => fn($value) => $value,
            self::CELSIUS => fn($value) => $value + 273.15,
            self::FAHRENHEIT => fn($value) => ($value - 32) * 5 / 9 + 273.15,
        };
    }

    // From base
    public function fromBase(): Closure
    {
        return match ($this) {
            self::KELVIN => fn($value) => $value,
            self::CELSIUS => fn($value) => $value - 273.15,
            self::FAHRENHEIT => fn($value) => ($value - 273.15) * 9 / 5 + 32,
        };
    }
}
