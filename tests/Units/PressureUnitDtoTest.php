<?php

namespace Units;

use Tests\Abstract\AbstractUnitDtoBase;
use Webboy\MeasurementUnits\Enums\Units\PressureUnitEnum;
use Webboy\MeasurementUnits\Units\PressureUnitDto;

class PressureUnitDtoTest extends AbstractUnitDtoBase
{

    /**
     * @inheritDoc
     */
    protected function createUnitClass(): string
    {
        return PressureUnitDto::class;
    }

    /**
     * @inheritDoc
     */
    protected function createUnitEnumClass(): string
    {
        return PressureUnitEnum::class;
    }
}