<?php

use Webboy\MeasurementUnits\Enums\Units\PressureUnitEnum;
use Webboy\MeasurementUnits\Units\PressureUnitDto;

return new PressureUnitDto(
    id: PressureUnitEnum::PSF->value,
    name: 'Pound per Square Foot',
    symbol: 'psf',
    toBase: fn($x) => $x * 47.8803,
    fromBase: fn($x) => $x / 47.8803
);