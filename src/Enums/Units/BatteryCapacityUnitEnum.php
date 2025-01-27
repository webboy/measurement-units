<?php

namespace Webboy\MeasurementUnits\Enums\Units;

use Closure;
use Webboy\MeasurementUnits\Enums\Interfaces\UnitEnumInterface;

/**
 * Enum representing common battery capacity units.
 */
enum BatteryCapacityUnitEnum: int implements UnitEnumInterface
{
    // 🔋 **Standard Units**
    case MILLIAMPERE_HOUR = 100;   // 1/1000 Ampere-hour
    case AMPERE_HOUR = 110;        // Ampere-hour
    case WATT_HOUR = 150;          // Depends on voltage (Wh = Ah × V)
    case KILOWATT_HOUR = 200;      // 1,000 Wh // Base unit

    // Labels
    public function label(): string
    {
        return match ($this) {
            self::MILLIAMPERE_HOUR => 'Milliampere-hour',
            self::AMPERE_HOUR => 'Ampere-hour',
            self::WATT_HOUR => 'Watt-hour',
            self::KILOWATT_HOUR => 'Kilowatt-hour',
        };
    }

    // Symbols

    public function symbol(): string
    {
        return match ($this) {
            self::MILLIAMPERE_HOUR => 'mAh',
            self::AMPERE_HOUR => 'Ah',
            self::WATT_HOUR => 'Wh',
            self::KILOWATT_HOUR => 'kWh',
        };
    }

    // To base

    public function toBase(): Closure
    {
        return match ($this) {
            self::MILLIAMPERE_HOUR => fn ($value, $voltage) => ($value / 1000) * $voltage,  // Convert mAh to Wh
            self::AMPERE_HOUR => fn ($value, $voltage) => $value * $voltage,               // Ah to Wh
            self::WATT_HOUR => fn ($value) => $value,                           // Wh remains Wh
            self::KILOWATT_HOUR => fn ($value) => $value * 1000,               // kWh to Wh
        };
    }

    // From base

    public function fromBase(): Closure
    {
        return match ($this) {
            self::MILLIAMPERE_HOUR => fn ($value, $voltage) => ($value / $voltage) * 1000,  // Convert Wh to mAh
            self::AMPERE_HOUR => fn ($value, $voltage) => $value / $voltage,               // Wh to Ah
            self::WATT_HOUR => fn ($value) => $value,                           // Wh remains Wh
            self::KILOWATT_HOUR => fn ($value) => $value / 1000,               // Wh to kWh
        };
    }

    public function value(): int
    {
        return $this->value;
    }
}
