<?php

namespace Measurements;

use Abstract\AbstractMeasurementDtoBase;
use Webboy\MeasurementUnits\Enums\Units\DistanceUnitEnum;
use Webboy\MeasurementUnits\Measurements\DistanceMeasurementDto;

class DistanceMeasurementDtoTest extends AbstractMeasurementDtoBase
{
    protected function createMeasurementDto(): object
    {
        return new DistanceMeasurementDto();
    }

    protected function createUnitEnumClass(): string
    {
        return DistanceUnitEnum::class;
    }
}
