<?php

namespace Tests\Measurements;

use PHPUnit\Framework\Attributes\CoversClass;
use Tests\Abstract\AbstractMeasurementDtoBase;
use Webboy\MeasurementUnits\Enums\Units\DistanceUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\PressureUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\SpeedUnitEnum;
use Webboy\MeasurementUnits\Measurements\DistanceMeasurementDto;
use Webboy\MeasurementUnits\Measurements\PressureMeasurementDto;
use Webboy\MeasurementUnits\Measurements\SpeedMeasurementDto;

/**
 * Tests for SpeedMeasurementDto.
 */
#[CoversClass(SpeedMeasurementDto::class)]
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
