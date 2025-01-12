<?php

use Webboy\MeasurementUnits\Enums\Units\TemperatureUnitEnum;
use Webboy\MeasurementUnits\Units\TemperatureUnitDto;

return new TemperatureUnitDto(
    id: TemperatureUnitEnum::KELVIN->value,
    name: 'Kelvin',
    symbol: 'K',
    toBase: fn($x) => $x + 273.15,
    fromBase: fn($x) => $x - 273.15
);