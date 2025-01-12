<?php

use Webboy\MeasurementUnits\Enums\Units\WeightUnitEnum;
use Webboy\MeasurementUnits\Units\WeightUnitDto;

return new WeightUnitDto(
    id: WeightUnitEnum::OUNCE->value,
    name: 'Ounce',
    symbol: 'oz',
    toBase: fn($x) => $x * 0.0283495,
    fromBase: fn($x) => $x / 0.0283495
);