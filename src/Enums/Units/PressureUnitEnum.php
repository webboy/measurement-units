<?php

namespace Webboy\MeasurementUnits\Enums\Units;

use Closure;
use Webboy\MeasurementUnits\Enums\Interfaces\UnitEnumInterface;

/**
 * Enum representing common pressure units across various measurement systems.
 */
enum PressureUnitEnum: int implements UnitEnumInterface
{
    // 🌍 **SI Units (International System of Units)**
    case PASCAL = 100;          // 1 N/m² (Base unit)
    case KILOPASCAL = 101;      // 1,000 Pascals
    case MEGAPASCAL = 102;      // 1,000,000 Pascals

    // ⚙️ **Metric Units**
    case BAR = 103;             // 100,000 Pascals
    case MILLIBAR = 104;        // 1/1,000 Bar
    case ATMOSPHERE = 105;      // 101,325 Pascals (Standard atmosphere)
    case TORR = 106;            // 1/760 atm (~133.322 Pa)

    // 🇺🇸 **Imperial/US Customary Units**
    case PSI = 107;             // Pounds per square inch
    case PSF = 108;             // Pounds per square foot
    case INHG = 109;            // Inches of mercury (used in aviation)
    case MMHG = 110;            // Millimeters of mercury (medical/meteorology)

    // Labels
    /**
     * @return string
     */
    public function label(): string
    {
        return match ($this) {
            self::PASCAL => 'Pascal',
            self::KILOPASCAL => 'Kilopascal',
            self::MEGAPASCAL => 'Megapascal',
            self::BAR => 'Bar',
            self::MILLIBAR => 'Millibar',
            self::ATMOSPHERE => 'Atmosphere',
            self::TORR => 'Torr',
            self::PSI => 'Pounds per Square Inch',
            self::PSF => 'Pounds per Square Foot',
            self::INHG => 'Inches of Mercury',
            self::MMHG => 'Millimeters of Mercury',
        };
    }

    // Symbols
    /**
     * @return string
     */
    public function symbol(): string
    {
        return match ($this) {
            self::PASCAL => 'Pa',
            self::KILOPASCAL => 'kPa',
            self::MEGAPASCAL => 'MPa',
            self::BAR => 'bar',
            self::MILLIBAR => 'mbar',
            self::ATMOSPHERE => 'atm',
            self::TORR => 'Torr',
            self::PSI => 'psi',
            self::PSF => 'psf',
            self::INHG => 'inHg',
            self::MMHG => 'mmHg',
        };
    }

    // To base
    /**
     * @return Closure
     */
    public function toBase(): Closure
    {
        return match ($this) {
            self::PASCAL => fn ($value) => $value,
            self::KILOPASCAL => fn ($value) => $value * 1_000,
            self::MEGAPASCAL => fn ($value) => $value * 1_000_000,
            self::BAR => fn ($value) => $value * 100_000,
            self::MILLIBAR => fn ($value) => $value * 100,
            self::ATMOSPHERE => fn ($value) => $value * 101_325,
            self::TORR => fn ($value) => $value * 133.322,
            self::PSI => fn ($value) => $value * 6_894.76,
            self::PSF => fn ($value) => $value * 47.8803,
            self::INHG => fn ($value) => $value * 3_386.39,
            self::MMHG => fn ($value) => $value * 133.322,
        };
    }

    // From base
    /**
     * @return Closure
     */
    public function fromBase(): Closure
    {
        return match ($this) {
            self::PASCAL => fn ($value) => $value,
            self::KILOPASCAL => fn ($value) => $value / 1_000,
            self::MEGAPASCAL => fn ($value) => $value / 1_000_000,
            self::BAR => fn ($value) => $value / 100_000,
            self::MILLIBAR => fn ($value) => $value / 100,
            self::ATMOSPHERE => fn ($value) => $value / 101_325,
            self::TORR => fn ($value) => $value / 133.322,
            self::PSI => fn ($value) => $value / 6_894.76,
            self::PSF => fn ($value) => $value / 47.8803,
            self::INHG => fn ($value) => $value / 3_386.39,
            self::MMHG => fn ($value) => $value / 133.322,
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
