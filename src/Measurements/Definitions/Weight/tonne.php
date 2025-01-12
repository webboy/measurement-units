<?php

use Webboy\MeasurementUnits\Enums\Units\WeightUnitEnum;
use Webboy\MeasurementUnits\Units\WeightUnitDto;

return new WeightUnitDto(
    id: WeightUnitEnum::TONNE->value,
    name: 'Tonne',
    symbol: 't',
    toBase: fn($x) => $x / 1000,
    fromBase: fn($x) => $x * 1000
);