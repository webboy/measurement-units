<?php

namespace Webboy\MeasurementUnits\Enums\Units;

/**
 * Enum representing common temperature units.
 */
enum TemperatureUnitEnum: string
{
    // 🌡️ **Metric System (SI Units)**
    case KELVIN = 'k';     // Base unit in thermodynamics

    // 🌍 **Commonly Used Units**
    case CELSIUS = 'c';    // Standard in most countries
    case FAHRENHEIT = 'f'; // Used primarily in the USA
}
