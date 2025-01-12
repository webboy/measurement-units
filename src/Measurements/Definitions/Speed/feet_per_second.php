<?php

use Webboy\MeasurementUnits\Enums\Units\SpeedUnitEnum;
use Webboy\MeasurementUnits\Units\SpeedUnitDto;

return new SpeedUnitDto(
    id: SpeedUnitEnum::FOOT_PER_SECOND->value,
    name: 'Foot per second',
    symbol: 'ft/s',
    toBase: fn($x) => $x * 0.3048,
    fromBase: fn($x) => $x / 0.3048
);