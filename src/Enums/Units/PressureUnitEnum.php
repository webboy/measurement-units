<?php

namespace Webboy\MeasurementUnits\Enums\Units;

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
}
