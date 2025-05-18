<?php

namespace Tests\Units;

use Tests\Abstract\AbstractUnitDtoBase;
use Webboy\MeasurementUnits\Enums\Units\BatteryCapacityUnitEnum;
use Webboy\MeasurementUnits\Units\BatteryCapacityUnitDto;

/**
 * @covers \Webboy\MeasurementUnits\Units\BatteryCapacityUnitDto
 * @covers \Webboy\MeasurementUnits\Enums\Units\BatteryCapacityUnitEnum
 */
class BatteryCapacityUnitDtoTest extends AbstractUnitDtoBase
{
    /**
     * @inheritDoc
     * @return string
     */
    protected function createUnitClass(): string
    {
        return BatteryCapacityUnitDto::class;
    }

    /**
     * @inheritDoc
     * @return string
     */
    protected function createUnitEnumClass(): string
    {
        return BatteryCapacityUnitEnum::class;
    }
}
