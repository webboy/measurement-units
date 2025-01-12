<?php

use Webboy\MeasurementUnits\Enums\Units\PressureUnitEnum;
use Webboy\MeasurementUnits\Units\PressureUnitDto;

return new PressureUnitDto(
    id: PressureUnitEnum::BAR->value,
    name: 'Bar',
    symbol: 'bar',
    toBase: fn($x) => $x * 100000,
    fromBase: fn($x) => $x / 100000
);