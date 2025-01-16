<?php

namespace Webboy\MeasurementUnits\Enums\Units;

use Closure;

/**
 * Enum representing common pressure units across various measurement systems.
 */
enum PressureUnitEnum: string
{
    // 🌍 **SI Units (International System of Units)**
    case PASCAL = 'Pa';          // 1 N/m² (Base unit)
    case KILOPASCAL = 'kPa';     // 1,000 Pascals
    case MEGAPASCAL = 'MPa';     // 1,000,000 Pascals

    // ⚙️ **Metric Units**
    case BAR = 'bar';            // 100,000 Pascals
    case MILLIBAR = 'mbar';      // 1/1,000 Bar
    case ATMOSPHERE = 'atm';     // 101,325 Pascals (Standard atmosphere)
    case TORR = 'Torr';          // 1/760 atm (~133.322 Pa)

    // 🇺🇸 **Imperial/US Customary Units**
    case PSI = 'psi';            // Pounds per square inch
    case PSF = 'psf';            // Pounds per square foot
    case INHG = 'inHg';          // Inches of mercury (used in aviation)
    case MMHG = 'mmHg';          // Millimeters of mercury (medical/meteorology)

    // Labels
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
    public function toBase(): Closure
    {
        return match ($this) {
            self::PASCAL => fn($value) => $value,
            self::KILOPASCAL => fn($value) => $value * 1_000,
            self::MEGAPASCAL => fn($value) => $value * 1_000_000,
            self::BAR => fn($value) => $value * 100_000,
            self::MILLIBAR => fn($value) => $value * 100,
            self::ATMOSPHERE => fn($value) => $value * 101_325,
            self::TORR => fn($value) => $value * 133.322,
            self::PSI => fn($value) => $value * 6_894.76,
            self::PSF => fn($value) => $value * 47.8803,
            self::INHG => fn($value) => $value * 3_386.39,
            self::MMHG => fn($value) => $value * 133.322,
        };
    }

    // From base
    public function fromBase(): Closure
    {
        return match ($this) {
            self::PASCAL => fn($value) => $value,
            self::KILOPASCAL => fn($value) => $value / 1_000,
            self::MEGAPASCAL => fn($value) => $value / 1_000_000,
            self::BAR => fn($value) => $value / 100_000,
            self::MILLIBAR => fn($value) => $value / 100,
            self::ATMOSPHERE => fn($value) => $value / 101_325,
            self::TORR => fn($value) => $value / 133.322,
            self::PSI => fn($value) => $value / 6_894.76,
            self::PSF => fn($value) => $value / 47.8803,
            self::INHG => fn($value) => $value / 3_386.39,
            self::MMHG => fn($value) => $value / 133.322,
        };
    }
}
