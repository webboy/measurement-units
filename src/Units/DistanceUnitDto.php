<?php

namespace Webboy\MeasurementUnits\Units;

use Webboy\MeasurementUnits\Enums\DistanceUnitEnum;
use Webboy\MeasurementUnits\UnitDto;
class DistanceUnitDto extends UnitDto
{
    protected string $unitEnumClass = DistanceUnitEnum::class;
}