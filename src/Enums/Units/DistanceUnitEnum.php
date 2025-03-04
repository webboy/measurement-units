<?php

namespace Webboy\MeasurementUnits\Enums\Units;

use Closure;
use Webboy\MeasurementUnits\Enums\Interfaces\UnitEnumInterface;

/**
 * Enum representing common distance units across various measurement systems.
 */
enum DistanceUnitEnum: int implements UnitEnumInterface
{
    // **Metric System (SI Units)**
    case MILLIMETER = 100;   // 1/1,000 meter
    case CENTIMETER = 101;   // 1/100 meter
    case METER = 102;        // Base unit
    case KILOMETER = 103;    // 1,000 meters

    // **Imperial/US Customary Units**
    case INCH = 104;         // 1/12 foot
    case FOOT = 105;         // 12 inches
    case YARD = 106;         // 3 feet
    case MILE = 107;         // 1,760 yards

    // **Nautical Units**
    case NAUTICAL_MILE = 108;   // ~1.852 kilometers
    case FATHOM = 109;          // 6 feet (used in maritime depth)

    // **Surveying Units (US-specific)**
    case ROD = 110;          // 16.5 feet
    case CHAIN = 111;        // 66 feet (surveying)
    case FURLONG = 112;      // 660 feet (1/8 mile)

    // **Other Traditional Units**
    case LEAGUE = 113;       // ~3 miles (historical unit)
    case HAND = 114;         // 4 inches (used for measuring horses)

    // Labels
    public function label(): string
    {
        return match ($this) {
            self::MILLIMETER => 'Millimeter',
            self::CENTIMETER => 'Centimeter',
            self::METER => 'Meter',
            self::KILOMETER => 'Kilometer',
            self::INCH => 'Inch',
            self::FOOT => 'Foot',
            self::YARD => 'Yard',
            self::MILE => 'Mile',
            self::NAUTICAL_MILE => 'Nautical Mile',
            self::FATHOM => 'Fathom',
            self::ROD => 'Rod',
            self::CHAIN => 'Chain',
            self::FURLONG => 'Furlong',
            self::LEAGUE => 'League',
            self::HAND => 'Hand',
        };
    }

    // Symbols
    public function symbol(): string
    {
        return match ($this) {
            self::MILLIMETER => 'mm',
            self::CENTIMETER => 'cm',
            self::METER => 'm',
            self::KILOMETER => 'km',
            self::INCH => 'in',
            self::FOOT => 'ft',
            self::YARD => 'yd',
            self::MILE => 'mi',
            self::NAUTICAL_MILE => 'nmi',
            self::FATHOM => 'ftm',
            self::ROD => 'rd',
            self::CHAIN => 'ch',
            self::FURLONG => 'fur',
            self::LEAGUE => 'lea',
            self::HAND => 'hh',
        };
    }

    // To base
    public function toBase(): Closure
    {
        return match ($this) {
            self::MILLIMETER => fn ($value) => $value / 1_000,
            self::CENTIMETER => fn ($value) => $value / 100,
            self::METER => fn ($value) => $value,
            self::KILOMETER => fn ($value) => $value * 1_000,
            self::INCH => fn ($value) => $value / 39.3701,
            self::FOOT => fn ($value) => $value / 3.28084,
            self::YARD => fn ($value) => $value / 1.09361,
            self::MILE => fn ($value) => $value / 0.000621371,
            self::NAUTICAL_MILE => fn ($value) => $value / 0.000539957,
            self::FATHOM => fn ($value) => $value / 1.8288,
            self::ROD => fn ($value) => $value / 5.0292,
            self::CHAIN => fn ($value) => $value / 20.1168,
            self::FURLONG => fn ($value) => $value / 201.168,
            self::LEAGUE => fn ($value) => $value / 0.000179986,
            self::HAND => fn ($value) => $value / 0.1016,
        };
    }

    // From base
    public function fromBase(): Closure
    {
        return match ($this) {
            self::MILLIMETER => fn ($value) => $value * 1_000,
            self::CENTIMETER => fn ($value) => $value * 100,
            self::METER => fn ($value) => $value,
            self::KILOMETER => fn ($value) => $value / 1_000,
            self::INCH => fn ($value) => $value * 39.3701,
            self::FOOT => fn ($value) => $value * 3.28084,
            self::YARD => fn ($value) => $value * 1.09361,
            self::MILE => fn ($value) => $value * 0.000621371,
            self::NAUTICAL_MILE => fn ($value) => $value * 0.000539957,
            self::FATHOM => fn ($value) => $value * 1.8288,
            self::ROD => fn ($value) => $value * 5.0292,
            self::CHAIN => fn ($value) => $value * 20.1168,
            self::FURLONG => fn ($value) => $value * 201.168,
            self::LEAGUE => fn ($value) => $value * 0.000179986,
            self::HAND => fn ($value) => $value * 0.1016,
        };
    }

    // Values
    public function value(): int
    {
        return $this->value;
    }
}
