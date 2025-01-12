<?php

use Webboy\MeasurementUnits\Enums\Units\SpeedUnitEnum;
use Webboy\MeasurementUnits\Units\SpeedUnitDto;

return new SpeedUnitDto(
    id: SpeedUnitEnum::MILE_PER_HOUR->value,
    name: 'Mile per hour',
    symbol: 'mph',
    toBase: fn($x) => $x * 0.44704,
    fromBase: fn($x) => $x / 0.44704
);