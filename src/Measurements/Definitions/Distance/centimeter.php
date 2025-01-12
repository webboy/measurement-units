<?php

use Webboy\MeasurementUnits\Enums\Units\DistanceUnitEnum;
use Webboy\MeasurementUnits\Units\DistanceUnitDto;

return new DistanceUnitDto(
    id: DistanceUnitEnum::CENTIMETER->value,
    name: 'Centimeter',
    symbol: 'cm',
    toBase: fn($x) => $x / 100,
    fromBase: fn($x) => $x * 100
);