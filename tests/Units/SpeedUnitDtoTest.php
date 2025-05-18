<?php

namespace Tests\Units;

use PHPUnit\Framework\Attributes\CoversClass;
use Tests\Abstract\AbstractUnitDtoBase;
use Webboy\MeasurementUnits\Enums\Units\SpeedUnitEnum;
use Webboy\MeasurementUnits\Units\SpeedUnitDto;

/**
 * Tests for SpeedUnitDto.
 */
#[CoversClass(SpeedUnitDto::class)]
#[CoversClass(SpeedUnitEnum::class)]
class SpeedUnitDtoTest extends AbstractUnitDtoBase
{
    /**
     * @inheritDoc
     * @return string
     */
    protected function createUnitClass(): string
    {
        return SpeedUnitDto::class;
    }

    /**
     * @inheritDoc
     * @return string
     */
    protected function createUnitEnumClass(): string
    {
        return SpeedUnitEnum::class;
    }
}
