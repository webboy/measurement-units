<?php

namespace Tests\Measurements;

use Tests\Abstract\AbstractMeasurementDtoBase;
use Webboy\MeasurementUnits\Enums\Units\DistanceUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\PressureUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\SpeedUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\TemperatureUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\VolumeUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\MassUnitEnum;
use Webboy\MeasurementUnits\Measurements\DistanceMeasurementDto;
use Webboy\MeasurementUnits\Measurements\PressureMeasurementDto;
use Webboy\MeasurementUnits\Measurements\SpeedMeasurementDto;
use Webboy\MeasurementUnits\Measurements\TemperatureMeasurementDto;
use Webboy\MeasurementUnits\Measurements\VolumeMeasurementDto;
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
