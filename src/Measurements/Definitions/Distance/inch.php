<?php

use Webboy\MeasurementUnits\Enums\DistanceUnitEnum;
use Webboy\MeasurementUnits\Units\DistanceUnitDto;

return new DistanceUnitDto(
    id: DistanceUnitEnum::INCH->value,
    name: 'Inch',
    symbol: 'in',
    toBase: fn($x) => $x * 0.0254,
    fromBase: fn($x) => $x / 0.0254
);