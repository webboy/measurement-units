<?php

use Webboy\MeasurementUnits\Enums\Units\PressureUnitEnum;
use Webboy\MeasurementUnits\Units\PressureUnitDto;

return new PressureUnitDto(
    id: PressureUnitEnum::PASCAL->value,
    name: 'Pascal',
    symbol: 'Pa',
    toBase: fn($x) => $x,
    fromBase: fn($x) => $x
);