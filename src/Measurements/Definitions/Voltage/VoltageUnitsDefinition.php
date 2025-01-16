<?php

use Webboy\MeasurementUnits\Enums\Units\VoltageUnitEnum;
use Webboy\MeasurementUnits\Units\VoltageUnitDto;

return [
    new VoltageUnitDto(
        id: VoltageUnitEnum::VOLT->value,
        name: VoltageUnitEnum::VOLT->label(),
        symbol: VoltageUnitEnum::VOLT->symbol(),
        toBase: VoltageUnitEnum::VOLT->toBase(),
        fromBase: VoltageUnitEnum::VOLT->fromBase(),
    ),
    new VoltageUnitDto(
        id: VoltageUnitEnum::MILLIVOLT->value,
        name: VoltageUnitEnum::MILLIVOLT->label(),
        symbol: VoltageUnitEnum::MILLIVOLT->symbol(),
        toBase: VoltageUnitEnum::MILLIVOLT->toBase(),
        fromBase: VoltageUnitEnum::MILLIVOLT->fromBase(),
    ),
    new VoltageUnitDto(
        id: VoltageUnitEnum::KILOVOLT->value,
        name: VoltageUnitEnum::KILOVOLT->label(),
        symbol: VoltageUnitEnum::KILOVOLT->symbol(),
        toBase: VoltageUnitEnum::KILOVOLT->toBase(),
        fromBase: VoltageUnitEnum::KILOVOLT->fromBase(),
    ),
];
