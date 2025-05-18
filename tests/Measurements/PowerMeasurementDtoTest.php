<?php

namespace Tests\Measurements;

use PHPUnit\Framework\Attributes\CoversNothing;
use Tests\Abstract\AbstractMeasurementDtoBase;
use Webboy\MeasurementUnits\Enums\Units\PowerUnitEnum;
use Webboy\MeasurementUnits\Measurements\PowerMeasurementDto;

/**
 * @internal
 */
#[CoversNothing]
class PowerMeasurementDtoTest extends AbstractMeasurementDtoBase
{
    /**
     * @return PowerMeasurementDto
     */
    protected function createMeasurementDto(): PowerMeasurementDto
    {
        return new PowerMeasurementDto();
    }

    /**
     * @return string
     */
    protected function createUnitEnumClass(): string
    {
        return PowerUnitEnum::class;
    }
}
