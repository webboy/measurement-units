<?php

namespace Measurements;

use Tests\Abstract\AbstractMeasurementDtoBase;
use Webboy\MeasurementUnits\Enums\Units\TorqueUnitEnum;
use Webboy\MeasurementUnits\Measurements\TorqueMeasurementDto;

class TorqueMeasurementDtoTest extends AbstractMeasurementDtoBase
{
    protected function createMeasurementDto(): object
    {
        return new TorqueMeasurementDto();
    }

    protected function createUnitEnumClass(): string
    {
        return TorqueUnitEnum::class;
    }
}
