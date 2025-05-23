<?php

namespace Tests\Measurements;

use PHPUnit\Framework\Attributes\CoversClass;
use Tests\Abstract\AbstractMeasurementDtoBase;
use Webboy\MeasurementUnits\Enums\Units\DistanceUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\PressureUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\SpeedUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\TemperatureUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\VoltageUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\VolumeUnitEnum;
use Webboy\MeasurementUnits\Measurements\DistanceMeasurementDto;
use Webboy\MeasurementUnits\Measurements\PressureMeasurementDto;
use Webboy\MeasurementUnits\Measurements\SpeedMeasurementDto;
use Webboy\MeasurementUnits\Measurements\TemperatureMeasurementDto;
use Webboy\MeasurementUnits\Measurements\VoltageMeasurementDto;
use Webboy\MeasurementUnits\Measurements\VolumeMeasurementDto;

/**
 * Tests for VoltageMeasurementDto.
 */
#[CoversClass(VoltageMeasurementDto::class)]
class VoltageMeasurementDtoTest extends AbstractMeasurementDtoBase
{
    /**
     * @return VoltageMeasurementDto
     */
    protected function createMeasurementDto(): VoltageMeasurementDto
    {
        return new VoltageMeasurementDto();
    }

    /**
     * @return string
     */
    protected function createUnitEnumClass(): string
    {
        return VoltageUnitEnum::class;
    }
}
