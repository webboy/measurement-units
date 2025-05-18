<?php

namespace Tests\Units;

use Tests\Abstract\AbstractUnitDtoBase;
use Webboy\MeasurementUnits\Enums\Units\PressureUnitEnum;
use Webboy\MeasurementUnits\Units\PressureUnitDto;

/**
 * @covers \Webboy\MeasurementUnits\Units\PressureUnitDto
 * @covers \Webboy\MeasurementUnits\Enums\Units\PressureUnitEnum
 */
class PressureUnitDtoTest extends AbstractUnitDtoBase
{
    /**
     * @inheritDoc
     * @return string
     */
    protected function createUnitClass(): string
    {
        return PressureUnitDto::class;
    }

    /**
     * @inheritDoc
     * @return string
     */
    protected function createUnitEnumClass(): string
    {
        return PressureUnitEnum::class;
    }
}
