<?php

namespace Tests\Measurements;

use Tests\Abstract\AbstractMeasurementDtoBase;
use Webboy\MeasurementUnits\Enums\Units\MassUnitEnum;
use Webboy\MeasurementUnits\Measurements\MassMeasurementDto;

class MassMeasurementDtoTest extends AbstractMeasurementDtoBase
{
    protected function createMeasurementDto(): object
    {
        return new MassMeasurementDto();
    }

    protected function createUnitEnumClass(): string
    {
        return MassUnitEnum::class;
    }
}
