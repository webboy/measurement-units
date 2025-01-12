<?php

use Webboy\MeasurementUnits\Enums\Units\TemperatureUnitEnum;
use Webboy\MeasurementUnits\Units\TemperatureUnitDto;

return new TemperatureUnitDto(
    id: TemperatureUnitEnum::CELSIUS->value,
    name: 'Celsius',
    symbol: '°C',
    toBase: fn($x) => $x,
    fromBase: fn($x) => $x
);