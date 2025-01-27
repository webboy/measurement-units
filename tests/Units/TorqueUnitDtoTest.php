<?php

namespace Units;

use Tests\Abstract\AbstractUnitDtoBase;
use Webboy\MeasurementUnits\Enums\Units\TorqueUnitEnum;
use Webboy\MeasurementUnits\Units\TorqueUnitDto;

class TorqueUnitDtoTest extends AbstractUnitDtoBase
{
    /**
     * @inheritDoc
     */
    protected function createUnitClass(): string
    {
        return TorqueUnitDto::class;
    }

    /**
     * @inheritDoc
     */
    protected function createUnitEnumClass(): string
    {
        return TorqueUnitEnum::class;
    }
}
