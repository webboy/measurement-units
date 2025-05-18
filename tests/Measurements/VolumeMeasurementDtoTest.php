<?php

namespace Tests\Measurements;

use PHPUnit\Framework\Attributes\CoversNothing;
use Tests\Abstract\AbstractMeasurementDtoBase;
use Webboy\MeasurementUnits\Enums\Units\DistanceUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\PressureUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\SpeedUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\TemperatureUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\VolumeUnitEnum;
use Webboy\MeasurementUnits\Measurements\DistanceMeasurementDto;
use Webboy\MeasurementUnits\Measurements\PressureMeasurementDto;
use Webboy\MeasurementUnits\Measurements\SpeedMeasurementDto;
use Webboy\MeasurementUnits\Measurements\TemperatureMeasurementDto;
use Webboy\MeasurementUnits\Measurements\VolumeMeasurementDto;

/**
 * @internal
 */
#[CoversNothing]
class VolumeMeasurementDtoTest extends AbstractMeasurementDtoBase
{
    /**
     * @return VolumeMeasurementDto
     */
    protected function createMeasurementDto(): VolumeMeasurementDto
    {
        return new VolumeMeasurementDto();
    }

    /**
     * @return string
     */
    protected function createUnitEnumClass(): string
    {
        return VolumeUnitEnum::class;
    }
}
