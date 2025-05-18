<?php

namespace Tests\Units;

use Tests\Abstract\AbstractUnitDtoBase;
use Webboy\MeasurementUnits\Enums\Units\SpeedUnitEnum;
use Webboy\MeasurementUnits\Units\SpeedUnitDto;

/**
 * @covers \Webboy\MeasurementUnits\Units\SpeedUnitDto
 * @covers \Webboy\MeasurementUnits\Enums\Units\SpeedUnitEnum
 */
class SpeedUnitDtoTest extends AbstractUnitDtoBase
{
    /**
     * @inheritDoc
     * @return string
     */
    protected function createUnitClass(): string
    {
        return SpeedUnitDto::class;
    }

    /**
     * @inheritDoc
     * @return string
     */
    protected function createUnitEnumClass(): string
    {
        return SpeedUnitEnum::class;
    }
}
