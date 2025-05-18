<?php

namespace Tests\Measurements;

use Tests\Abstract\AbstractMeasurementDtoBase;
use Webboy\MeasurementUnits\Enums\Units\TorqueUnitEnum;
use Webboy\MeasurementUnits\Measurements\TorqueMeasurementDto;

/**
 * @internal
 *
 * @coversNothing
 */
class TorqueMeasurementDtoTest extends AbstractMeasurementDtoBase
{
    /**
     * @return TorqueMeasurementDto
     */
    protected function createMeasurementDto(): TorqueMeasurementDto
    {
        return new TorqueMeasurementDto();
    }

    /**
     * @return string
     */
    protected function createUnitEnumClass(): string
    {
        return TorqueUnitEnum::class;
    }
}
