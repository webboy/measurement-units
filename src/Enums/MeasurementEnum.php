<?php

namespace Webboy\MeasurementUnits\Enums;

enum MeasurementEnum: string
{
    case DISTANCE = 'distance';
    case WEIGHT = 'weight';
    case VOLUME = 'volume';
    case TEMPERATURE = 'temperature';
    case SPEED = 'speed';
    case PRESSURE = 'pressure';
}
