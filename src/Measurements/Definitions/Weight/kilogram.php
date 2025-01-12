<?php

use Webboy\MeasurementUnits\Enums\WeightUnitEnum;
use Webboy\MeasurementUnits\Units\WeightUnitDto;

return new WeightUnitDto(
    id: WeightUnitEnum::KILOGRAM->value,
    name: 'Kilogram',
    symbol: 'kg',
    toBase: fn($x) => $x,
    fromBase: fn($x) => $x
);