<?php

namespace Tests\Measurements;

use Tests\Abstract\AbstractMeasurementDtoBase;
use Webboy\MeasurementUnits\Enums\Units\MassUnitEnum;
use Webboy\MeasurementUnits\Measurements\MassMeasurementDto;

/**
 * @covers \Webboy\MeasurementUnits\Measurements\MassMeasurementDto
 */
class MassMeasurementDtoTest extends AbstractMeasurementDtoBase
{
    /**
     * @return MassMeasurementDto
     */
    protected function createMeasurementDto(): MassMeasurementDto
    {
        return new MassMeasurementDto();
    }

    /**
     * @return string
     */
    protected function createUnitEnumClass(): string
    {
        return MassUnitEnum::class;
    }
}
