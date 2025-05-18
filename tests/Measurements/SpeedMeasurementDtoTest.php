<?php

namespace Tests\Measurements;

use Tests\Abstract\AbstractMeasurementDtoBase;
use Webboy\MeasurementUnits\Enums\Units\DistanceUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\PressureUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\SpeedUnitEnum;
use Webboy\MeasurementUnits\Measurements\DistanceMeasurementDto;
use Webboy\MeasurementUnits\Measurements\PressureMeasurementDto;
use Webboy\MeasurementUnits\Measurements\SpeedMeasurementDto;

/**
 * @covers \Webboy\MeasurementUnits\Measurements\SpeedMeasurementDto
 */
class SpeedMeasurementDtoTest extends AbstractMeasurementDtoBase
{
    /**
     * @return SpeedMeasurementDto
     */
    protected function createMeasurementDto(): SpeedMeasurementDto
    {
        return new SpeedMeasurementDto();
    }

    /**
     * @return string
     */
    protected function createUnitEnumClass(): string
    {
        return SpeedUnitEnum::class;
    }
}
