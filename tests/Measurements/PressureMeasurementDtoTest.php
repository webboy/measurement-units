<?php

namespace Tests\Measurements;

use PHPUnit\Framework\Attributes\CoversNothing;
use Tests\Abstract\AbstractMeasurementDtoBase;
use Webboy\MeasurementUnits\Enums\Units\DistanceUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\PressureUnitEnum;
use Webboy\MeasurementUnits\Measurements\DistanceMeasurementDto;
use Webboy\MeasurementUnits\Measurements\PressureMeasurementDto;

/**
 * @internal
 */
#[CoversNothing]
class PressureMeasurementDtoTest extends AbstractMeasurementDtoBase
{
    /**
     * @return PressureMeasurementDto
     */
    protected function createMeasurementDto(): PressureMeasurementDto
    {
        return new PressureMeasurementDto();
    }

    /**
     * @return string
     */
    protected function createUnitEnumClass(): string
    {
        return PressureUnitEnum::class;
    }
}
