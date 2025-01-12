<?php

use Webboy\MeasurementUnits\Enums\Units\SpeedUnitEnum;
use Webboy\MeasurementUnits\Units\SpeedUnitDto;

return new SpeedUnitDto(
    id: SpeedUnitEnum::KILOMETER_PER_HOUR->value,
    name: 'Kilometer per hour',
    symbol: 'km/h',
    toBase: fn($x) => $x / 3.6,
    fromBase: fn($x) => $x * 3.6
);