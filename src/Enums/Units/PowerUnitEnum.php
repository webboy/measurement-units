<?php

namespace Webboy\MeasurementUnits\Enums\Units;

enum PowerUnitEnum: string
{
    // 🌍 **SI Units (International System of Units)**
    case WATT = 'W';            // 1 Watt (Base SI unit)
    case KILOWATT = 'kW';       // 1,000 Watts
    case MEGAWATT = 'MW';       // 1,000,000 Watts

    // ⚙️ **Metric Units**
    case HORSEPOWER = 'HP';     // ~745.7 Watts

    // 🇺🇸 **Imperial/US Customary Units**
    case BTU_PER_HOUR = 'BTU/h'; // ~0.000293071 kW
}
