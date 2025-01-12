<?php

namespace Webboy\MeasurementUnits\Units;

use Webboy\MeasurementUnits\Enums\Units\SpeedUnitEnum;
use Webboy\MeasurementUnits\UnitDto;

class SpeedUnitDto extends UnitDto
{
    public function __construct(int | string $id, string $name, string $symbol, callable $toBase, callable $fromBase)
    {
        parent::__construct(
            id: $id,
            name: $name,
            symbol: $symbol,
            toBase: $toBase,
            fromBase: $fromBase,
            validIds: array_map(fn($unit) => $unit->value, SpeedUnitEnum::cases())
        );
    }
}