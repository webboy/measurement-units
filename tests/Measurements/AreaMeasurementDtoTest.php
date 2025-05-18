<?php

namespace Tests\Measurements;

use Tests\Abstract\AbstractMeasurementDtoBase;
use Webboy\MeasurementUnits\Enums\Units\AreaUnitEnum;
use Webboy\MeasurementUnits\Measurements\AreaMeasurementDto;

/**
 * @covers \Webboy\MeasurementUnits\Measurements\AreaMeasurementDto
 */
class AreaMeasurementDtoTest extends AbstractMeasurementDtoBase
{
    /**
     * @return AreaMeasurementDto
     */
    protected function createMeasurementDto(): AreaMeasurementDto
    {
        return new AreaMeasurementDto();
    }

    /**
     * @return string
     */
    protected function createUnitEnumClass(): string
    {
        return AreaUnitEnum::class;
    }
}
