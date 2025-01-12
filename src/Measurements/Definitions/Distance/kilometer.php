<?php

use Webboy\MeasurementUnits\Enums\Units\DistanceUnitEnum;
use Webboy\MeasurementUnits\Units\DistanceUnitDto;

return new DistanceUnitDto(
    id: DistanceUnitEnum::KILOMETER->value,
    name: 'Kilometer',
    symbol: 'km',
    toBase: fn($x) => $x * 1000,
    fromBase: fn($x) => $x / 1000
);