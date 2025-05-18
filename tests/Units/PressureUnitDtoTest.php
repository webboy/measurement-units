<?php

namespace Tests\Units;

use PHPUnit\Framework\Attributes\CoversClass;
use Tests\Abstract\AbstractUnitDtoBase;
use Webboy\MeasurementUnits\Enums\Units\PressureUnitEnum;
use Webboy\MeasurementUnits\Units\PressureUnitDto;

/**
 * Tests for PressureUnitDto and PressureUnitEnum.
 */
#[CoversClass(PressureUnitDto::class)]
#[CoversClass(PressureUnitEnum::class)]
class PressureUnitDtoTest extends AbstractUnitDtoBase
{
    /**
     * @inheritDoc
     * @return string
     */
    protected function createUnitClass(): string
    {
        return PressureUnitDto::class;
    }

    /**
     * @inheritDoc
     * @return string
     */
    protected function createUnitEnumClass(): string
    {
        return PressureUnitEnum::class;
    }
}
