<?php

use Webboy\MeasurementUnits\Enums\Units\DistanceUnitEnum;
use Webboy\MeasurementUnits\Units\DistanceUnitDto;

return new DistanceUnitDto(
    id: DistanceUnitEnum::YARD->value,
    name: 'Yard',
    symbol: 'yd',
    toBase: fn($x) => $x * 0.9144,
    fromBase: fn($x) => $x / 0.9144
);