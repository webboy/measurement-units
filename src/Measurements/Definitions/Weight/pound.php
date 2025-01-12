<?php

use Webboy\MeasurementUnits\Enums\WeightUnitEnum;
use Webboy\MeasurementUnits\Units\WeightUnitDto;

return new WeightUnitDto(
    id: WeightUnitEnum::POUND->value,
    name: 'Pound',
    symbol: 'lb',
    toBase: fn($x) => $x * 0.453592,
    fromBase: fn($x) => $x / 0.453592
);