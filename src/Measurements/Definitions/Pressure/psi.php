<?php

use Webboy\MeasurementUnits\Enums\Units\PressureUnitEnum;
use Webboy\MeasurementUnits\Units\PressureUnitDto;

return new PressureUnitDto(
    id: PressureUnitEnum::PSI->value,
    name: 'Pound per Square Inch',
    symbol: 'psi',
    toBase: fn($x) => $x * 6894.76,
    fromBase: fn($x) => $x / 6894.76
);