<?php

namespace Webboy\MeasurementUnits\Units;

use Webboy\MeasurementUnits\Enums\DistanceUnitEnum;
use Webboy\MeasurementUnits\Enums\TemperatureUnitEnum;
use Webboy\MeasurementUnits\UnitDto;
class TemperatureUnitDto extends UnitDto
{
    protected string $unitEnumClass = TemperatureUnitEnum::class;
}