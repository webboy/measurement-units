<?php

namespace Webboy\MeasurementUnits\Enums\Units;

/**
 * Enum representing common distance units across various measurement systems.
 */
enum DistanceUnitEnum: string
{
    // **Metric System (SI Units)**
    case MILLIMETER = 'mm';   // 1/1,000 meter
    case CENTIMETER = 'cm';   // 1/100 meter
    case METER = 'm';         // Base unit
    case KILOMETER = 'km';    // 1,000 meters

    // **Imperial/US Customary Units**
    case INCH = 'in';         // 1/12 foot
    case FOOT = 'ft';         // 12 inches
    case YARD = 'yd';         // 3 feet
    case MILE = 'mi';         // 1,760 yards

    // **Nautical Units**
    case NAUTICAL_MILE = 'nmi';   // ~1.852 kilometers
    case FATHOM = 'ftm';          // 6 feet (used in maritime depth)

    // **Surveying Units (US-specific)**
    case ROD = 'rd';          // 16.5 feet
    case CHAIN = 'ch';        // 66 feet (surveying)
    case FURLONG = 'fur';     // 660 feet (1/8 mile)

    // **Other Traditional Units**
    case LEAGUE = 'lea';      // ~3 miles (historical unit)
    case HAND = 'hh';         // 4 inches (used for measuring horses)
}
