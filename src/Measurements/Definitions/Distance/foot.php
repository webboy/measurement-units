<?php

use Webboy\MeasurementUnits\Enums\Units\DistanceUnitEnum;
use Webboy\MeasurementUnits\Units\DistanceUnitDto;

return new DistanceUnitDto(
    id: DistanceUnitEnum::FOOT->value,
    name: 'Foot',
    symbol: 'ft',
    toBase: fn($x) => $x * 0.3048,
    fromBase: fn($x) => $x / 0.3048
);