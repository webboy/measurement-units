<?php

namespace Webboy\MeasurementUnits\Units;

use Webboy\MeasurementUnits\Enums\DistanceUnitEnum;
use Webboy\MeasurementUnits\Enums\WeightUnitEnum;
use Webboy\MeasurementUnits\UnitDto;
class WeightUnitDto extends UnitDto
{
    protected string $unitEnumClass = WeightUnitEnum::class;
}