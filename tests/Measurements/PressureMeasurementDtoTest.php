<?php

namespace Tests\Measurements;

use Tests\Abstract\AbstractMeasurementDtoBase;
use Webboy\MeasurementUnits\Enums\Units\DistanceUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\PressureUnitEnum;
use Webboy\MeasurementUnits\Measurements\DistanceMeasurementDto;
use Webboy\MeasurementUnits\Measurements\PressureMeasurementDto;

class PressureMeasurementDtoTest extends AbstractMeasurementDtoBase
{
    protected function createMeasurementDto(): PressureMeasurementDto
    {
        return new PressureMeasurementDto();
    }

    protected function createUnitEnumClass(): string
    {
        return PressureUnitEnum::class;
    }
}
