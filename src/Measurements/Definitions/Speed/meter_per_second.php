<?php

use Webboy\MeasurementUnits\Enums\Units\SpeedUnitEnum;
use Webboy\MeasurementUnits\Units\SpeedUnitDto;

return new SpeedUnitDto(
    id: SpeedUnitEnum::METER_PER_SECOND->value,
    name: 'Meter per second',
    symbol: 'm/s',
    toBase: fn($x) => $x,
    fromBase: fn($x) => $x
);