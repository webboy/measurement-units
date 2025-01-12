<?php

namespace Webboy\MeasurementUnits\Units;

use Webboy\MeasurementUnits\Enums\Units\DistanceUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\PressureUnitEnum;
use Webboy\MeasurementUnits\UnitDto;

class PressureUnitDto extends UnitDto
{
    public function __construct(int | string $id, string $name, string $symbol, callable $toBase, callable $fromBase)
    {
        parent::__construct(
            id: $id,
            name: $name,
            symbol: $symbol,
            toBase: $toBase,
            fromBase: $fromBase,
            validIds: array_map(fn($unit) => $unit->value, PressureUnitEnum::cases())
        );
    }
}