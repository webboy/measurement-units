<?php

use Webboy\MeasurementUnits\Enums\Units\VolumeUnitEnum;
use Webboy\MeasurementUnits\Units\VolumeUnitDto;

return new VolumeUnitDto(
    id: VolumeUnitEnum::GALLON->value,
    name: 'Gallon',
    symbol: 'gal(US)',
    toBase: fn($x) => $x * 3.78541,
    fromBase: fn($x) => $x / 3.78541,
);