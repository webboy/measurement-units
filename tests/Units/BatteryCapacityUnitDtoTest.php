<?php

namespace Tests\Units;

use PHPUnit\Framework\Attributes\CoversClass;
use Tests\Abstract\AbstractUnitDtoBase;
use Webboy\MeasurementUnits\Enums\Units\BatteryCapacityUnitEnum;
use Webboy\MeasurementUnits\Units\BatteryCapacityUnitDto;

/**
 * Tests for BatteryCapacityUnitDto and BatteryCapacityUnitEnum.
 */
#[CoversClass(BatteryCapacityUnitDto::class)]
#[CoversClass(BatteryCapacityUnitEnum::class)]
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
