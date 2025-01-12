<?php

use Webboy\MeasurementUnits\Enums\Units\TemperatureUnitEnum;
use Webboy\MeasurementUnits\Units\TemperatureUnitDto;

return new TemperatureUnitDto(
    id: TemperatureUnitEnum::FAHRENHEIT->value,
    name: 'Fahrenheit',
    symbol: '°F',
    toBase: fn($x) => ($x - 32) * 5 / 9,
    fromBase: fn($x) => ($x * 9 / 5) + 32
);