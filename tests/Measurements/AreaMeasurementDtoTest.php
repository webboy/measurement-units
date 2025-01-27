<?php

namespace Tests\Measurements;

use Tests\Abstract\AbstractMeasurementDtoBase;
use Webboy\MeasurementUnits\Enums\Units\AreaUnitEnum;
use Webboy\MeasurementUnits\Measurements\AreaMeasurementDto;

class AreaMeasurementDtoTest extends AbstractMeasurementDtoBase
{
    protected function createMeasurementDto(): AreaMeasurementDto
    {
        return new AreaMeasurementDto();
    }

    protected function createUnitEnumClass(): string
    {
        return AreaUnitEnum::class;
    }
}
