<?php

namespace Units;

use Tests\Abstract\AbstractUnitDtoBase;
use Webboy\MeasurementUnits\Enums\Units\BatteryCapacityUnitEnum;
use Webboy\MeasurementUnits\Units\BatteryCapacityUnitDto;

class BatteryCapacityUnitDtoTest extends AbstractUnitDtoBase
{

    /**
     * @inheritDoc
     */
    protected function createUnitClass(): string
    {
        return BatteryCapacityUnitDto::class;
    }

    /**
     * @inheritDoc
     */
    protected function createUnitEnumClass(): string
    {
        return BatteryCapacityUnitEnum::class;
    }
}