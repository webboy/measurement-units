<?php

namespace Tests\Measurements;

use Tests\Abstract\AbstractMeasurementDtoBase;
use Webboy\MeasurementUnits\Enums\Units\PowerUnitEnum;
use Webboy\MeasurementUnits\Measurements\PowerMeasurementDto;

class PowerMeasurementDtoTest extends AbstractMeasurementDtoBase
{
    protected function createMeasurementDto(): PowerMeasurementDto
    {
        return new PowerMeasurementDto();
    }

    protected function createUnitEnumClass(): string
    {
        return PowerUnitEnum::class;
    }
}
