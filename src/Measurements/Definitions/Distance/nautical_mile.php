<?php

use Webboy\MeasurementUnits\Enums\DistanceUnitEnum;
use Webboy\MeasurementUnits\Units\DistanceUnitDto;

return new DistanceUnitDto(
    id: DistanceUnitEnum::NAUTICAL_MILE->value,
    name: 'Nautical Mile',
    symbol: 'nmi',
    toBase: fn($x) => $x * 1852,
    fromBase: fn($x) => $x / 1852
);