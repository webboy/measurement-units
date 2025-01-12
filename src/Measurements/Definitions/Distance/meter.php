<?php

use Webboy\MeasurementUnits\Enums\Units\DistanceUnitEnum;
use Webboy\MeasurementUnits\Units\DistanceUnitDto;

return new DistanceUnitDto(
    id: DistanceUnitEnum::METER->value,
    name: 'Meter',
    symbol: 'm',
    toBase: fn($x) => $x * 1,            // m → m
    fromBase: fn($x) => $x / 1,           // m → m
    isBase: true,
);