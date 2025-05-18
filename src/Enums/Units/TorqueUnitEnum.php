<?php

namespace Webboy\MeasurementUnits\Enums\Units;

use Closure;
use Webboy\MeasurementUnits\Enums\Interfaces\UnitEnumInterface;

/**
 * Enum representing common torque units with conversion methods.
 */
enum TorqueUnitEnum: int implements UnitEnumInterface
{
    // 🌍 **Metric System (SI Units)**
    case NEWTON_METER = 100;             // Base unit
    case KILONEWTON_METER = 110;       // 1 kN·m = 1,000 N·m
    case NEWTON_CENTIMETER = 120;      // 1 N·cm = 1/100 N·m
    // 🇺🇸 **Imperial/US Customary Units**
    case POUND_FOOT = 130;            // 1 lb·ft ≈ 1.35582 N·m
    case POUND_INCH = 140;            // 1 lb·in ≈ 0.112985 N·m
    case OUNCE_INCH = 150;            // 1 oz·in ≈ 0.00706155 N·m
    // ⚙️ **Other Units**
    case KILOGRAM_FORCE_METER = 160;  // 1 kgf·m ≈ 9.80665 N·m
    case KILOGRAM_FORCE_CENTIMETER = 170; // 1 kgf·cm ≈ 0.0980665 N·m

    /**
     * Human-readable label for each unit.
     * @return string
     */
    public function label(): string
    {
        return match ($this) {
            self::NEWTON_METER => 'Newton Meter',
            self::KILONEWTON_METER => 'Kilonewton Meter',
            self::NEWTON_CENTIMETER => 'Newton Centimeter',
            self::POUND_FOOT => 'Pound-foot',
            self::POUND_INCH => 'Pound-inch',
            self::OUNCE_INCH => 'Ounce-inch',
            self::KILOGRAM_FORCE_METER => 'Kilogram-force Meter',
            self::KILOGRAM_FORCE_CENTIMETER => 'Kilogram-force Centimeter',
        };
    }

    /**
     * Symbol for each unit.
     * @return string
     */
    public function symbol(): string
    {
        return match ($this) {
            self::NEWTON_METER => 'N·m',
            self::KILONEWTON_METER => 'kN·m',
            self::NEWTON_CENTIMETER => 'N·cm',
            self::POUND_FOOT => 'lb·ft',
            self::POUND_INCH => 'lb·in',
            self::OUNCE_INCH => 'oz·in',
            self::KILOGRAM_FORCE_METER => 'kgf·m',
            self::KILOGRAM_FORCE_CENTIMETER => 'kgf·cm',
        };
    }

    /**
     * Conversion to base unit (Newton Meter).
     * @return Closure
     */
    public function toBase(): Closure
    {
        return match ($this) {
            self::NEWTON_METER => fn (float|int $value): float => (float)$value,
            self::KILONEWTON_METER => fn (float|int $value): float => (float)$value * 1000,
            self::NEWTON_CENTIMETER => fn (float|int $value): float => (float)$value / 100,
            self::POUND_FOOT => fn (float|int $value): float => (float)$value * 1.3558179483314,
            self::POUND_INCH => fn (float|int $value): float => (float)$value * 0.1129848290276167,
            self::OUNCE_INCH => fn (float|int $value): float => (float)$value * 0.00706155183333,
            self::KILOGRAM_FORCE_METER => fn (float|int $value): float => (float)$value * 9.80665,
            self::KILOGRAM_FORCE_CENTIMETER => fn (float|int $value): float => (float)$value * 0.0980665,
        };
    }

    /**
     * Conversion from base unit (Newton Meter).
     * @return Closure
     */
    public function fromBase(): Closure
    {
        return match ($this) {
            self::NEWTON_METER => fn (float|int $value): float => (float)$value,
            self::KILONEWTON_METER => fn (float|int $value): float => (float)$value / 1000,
            self::NEWTON_CENTIMETER => fn (float|int $value): float => (float)$value * 100,
            self::POUND_FOOT => fn (float|int $value): float => (float)$value / 1.3558179483314,
            self::POUND_INCH => fn (float|int $value): float => (float)$value / 0.1129848290276167,
            self::OUNCE_INCH => fn (float|int $value): float => (float)$value / 0.00706155183333,
            self::KILOGRAM_FORCE_METER => fn (float|int $value): float => (float)$value / 9.80665,
            self::KILOGRAM_FORCE_CENTIMETER => fn (float|int $value): float => (float)$value / 0.0980665,
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
