<?php

namespace Tests\Units;

use Tests\Abstract\AbstractUnitDtoBase;
use Webboy\MeasurementUnits\Enums\Units\AreaUnitEnum;
use Webboy\MeasurementUnits\Units\AreaUnitDto;

/**
 * @covers \Webboy\MeasurementUnits\Units\AreaUnitDto
 * @covers \Webboy\MeasurementUnits\Enums\Units\AreaUnitEnum
 */
class AreaUnitDtoTest extends AbstractUnitDtoBase
{
    /**
     * @inheritDoc
     * @return string
     */
    protected function createUnitClass(): string
    {
        return AreaUnitDto::class;
    }

    /**
     * @inheritDoc
     * @return string
     */
    protected function createUnitEnumClass(): string
    {
        return AreaUnitEnum::class;
    }
}
