<?php

namespace Tests\Measurements;

use Tests\Abstract\AbstractMeasurementDtoBase;
use Webboy\MeasurementUnits\Enums\Units\TorqueUnitEnum;
use Webboy\MeasurementUnits\Measurements\TorqueMeasurementDto;

class TorqueMeasurementDtoTest extends AbstractMeasurementDtoBase
{
    protected function createMeasurementDto(): TorqueMeasurementDto
    {
        return new TorqueMeasurementDto();
    }

    protected function createUnitEnumClass(): string
    {
        return TorqueUnitEnum::class;
    }
}
