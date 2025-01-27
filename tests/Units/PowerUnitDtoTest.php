<?php

namespace Units;

use Tests\Abstract\AbstractUnitDtoBase;
use Webboy\MeasurementUnits\Enums\Units\PowerUnitEnum;
use Webboy\MeasurementUnits\Units\PowerUnitDto;

class PowerUnitDtoTest extends AbstractUnitDtoBase
{
    /**
     * @inheritDoc
     */
    protected function createUnitClass(): string
    {
        return PowerUnitDto::class;
    }

    /**
     * @inheritDoc
     */
    protected function createUnitEnumClass(): string
    {
        return PowerUnitEnum::class;
    }
}
