<?php

namespace Units;

use Tests\Abstract\AbstractUnitDtoBase;
use Webboy\MeasurementUnits\Enums\Units\AreaUnitEnum;
use Webboy\MeasurementUnits\Units\AreaUnitDto;

class AreaUnitDtoTest extends AbstractUnitDtoBase
{
    /**
     * @inheritDoc
     */
    protected function createUnitClass(): string
    {
        return AreaUnitDto::class;
    }

    /**
     * @inheritDoc
     */
    protected function createUnitEnumClass(): string
    {
        return AreaUnitEnum::class;
    }
}
