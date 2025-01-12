<?php

namespace Webboy\MeasurementUnits\Enums\Units;

enum SpeedUnitEnum: string
{
    case METER_PER_SECOND = 'm_s';
    case KILOMETER_PER_HOUR = 'km_h';
    case MILE_PER_HOUR = 'mi_h';
    case KNOT = 'kn';
    case FOOT_PER_SECOND = 'ft_s';
}
