<?php

use Webboy\MeasurementUnits\Enums\Units\SpeedUnitEnum;
use Webboy\MeasurementUnits\Units\SpeedUnitDto;

return new SpeedUnitDto(
    id: SpeedUnitEnum::KNOT->value,
    name: 'Knot',
    symbol: 'kts',
    toBase: fn($x) => $x * 0.514444,
    fromBase: fn($x) => $x / 0.514444
);