<?php

namespace Webboy\MeasurementUnits\Enums\Units;

enum FuelConsumptionUnitEnum: string
{
    // 🌍 **SI/Metric Units**
    case LITERS_PER_100KM = 'L/100km';   // Liters per 100 kilometers
    case KILOMETERS_PER_LITER = 'km/L';  // Kilometers per liter

    // 🇺🇸 **Imperial/US Customary Units**
    case MILES_PER_GALLON_US = 'mpg_us'; // Miles per gallon (US)
    case MILES_PER_GALLON_UK = 'mpg_uk'; // Miles per gallon (UK)
}
