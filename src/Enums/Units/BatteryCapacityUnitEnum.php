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
    /**
     * @return string
     */
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
    /**
     * @return string
     */
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
    /**
     * @return Closure
     */
    public function toBase(): Closure
    {
        return match ($this) {
            self::MILLIAMPERE_HOUR => fn (float|int $value, float|int $voltage): float => ((float)$value / 1000) * (float)$voltage,  // Convert mAh to Wh
            self::AMPERE_HOUR => fn (float|int $value, float|int $voltage): float => (float)$value * (float)$voltage,               // Ah to Wh
            self::WATT_HOUR => fn (float|int $value): float => (float)$value,                           // Wh remains Wh
            self::KILOWATT_HOUR => fn (float|int $value): float => (float)$value * 1000,               // kWh to Wh
        };
    }

    // From base
    /**
     * @return Closure
     */
    public function fromBase(): Closure
    {
        return match ($this) {
            self::MILLIAMPERE_HOUR => fn (float|int $value, float|int $voltage): float => ((float)$value / (float)$voltage) * 1000,  // Convert Wh to mAh
            self::AMPERE_HOUR => fn (float|int $value, float|int $voltage): float => (float)$value / (float)$voltage,               // Wh to Ah
            self::WATT_HOUR => fn (float|int $value): float => (float)$value,                           // Wh remains Wh
            self::KILOWATT_HOUR => fn (float|int $value): float => (float)$value / 1000,               // Wh to kWh
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
