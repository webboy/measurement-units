<?php

namespace Units;

use Tests\Abstract\AbstractUnitDtoBase;
use Webboy\MeasurementUnits\Enums\Units\SpeedUnitEnum;
use Webboy\MeasurementUnits\Units\SpeedUnitDto;

class SpeedUnitDtoTest extends AbstractUnitDtoBase
{
    /**
     * @inheritDoc
     */
    protected function createUnitClass(): string
    {
        return SpeedUnitDto::class;
    }

    /**
     * @inheritDoc
     */
    protected function createUnitEnumClass(): string
    {
        return SpeedUnitEnum::class;
    }
}
