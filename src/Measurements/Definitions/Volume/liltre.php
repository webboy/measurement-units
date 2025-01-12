<?php

use Webboy\MeasurementUnits\Enums\Units\VolumeUnitEnum;
use Webboy\MeasurementUnits\Units\VolumeUnitDto;

return new VolumeUnitDto(
    id: VolumeUnitEnum::LITRE->value,
    name: 'Litre',
    symbol: 'L',
    toBase: fn($x) => $x,
    fromBase: fn($x) => $x,
);