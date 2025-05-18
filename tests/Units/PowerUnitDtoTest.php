<?php

namespace Tests\Units;

use PHPUnit\Framework\Attributes\CoversClass;
use Tests\Abstract\AbstractUnitDtoBase;
use Webboy\MeasurementUnits\Enums\Units\PowerUnitEnum;
use Webboy\MeasurementUnits\Units\PowerUnitDto;

/**
 * Tests for PowerUnitDto and PowerUnitEnum.
 */
#[CoversClass(PowerUnitDto::class)]
#[CoversClass(PowerUnitEnum::class)]
class PowerUnitDtoTest extends AbstractUnitDtoBase
{
    /**
     * @inheritDoc
     * @return string
     */
    protected function createUnitClass(): string
    {
        return PowerUnitDto::class;
    }

    /**
     * @inheritDoc
     * @return string
     */
    protected function createUnitEnumClass(): string
    {
        return PowerUnitEnum::class;
    }
}
