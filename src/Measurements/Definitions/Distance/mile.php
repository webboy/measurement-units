<?php

use Webboy\MeasurementUnits\Enums\DistanceUnitEnum;
use Webboy\MeasurementUnits\Units\DistanceUnitDto;

return new DistanceUnitDto(
    id: DistanceUnitEnum::MILE->value,
    name: 'Mile',
    symbol: 'mi',
    toBase: fn($x) => $x * 1609.344,
    fromBase: fn($x) => $x / 1609.344
);