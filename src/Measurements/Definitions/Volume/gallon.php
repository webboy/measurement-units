<?php

use Webboy\MeasurementUnits\Enums\Units\VolumeUnitEnum;
use Webboy\MeasurementUnits\Units\VolumeUnitDto;

return new VolumeUnitDto(
    id: VolumeUnitEnum::GALLON_UK->value,
    name: 'Gallon UK',
    symbol: 'gal(UK)',
    toBase: fn($x) => $x * 4.54609,
    fromBase: fn($x) => $x / 4.54609,
);