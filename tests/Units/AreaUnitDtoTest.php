<?php

namespace Tests\Units;

use PHPUnit\Framework\Attributes\CoversClass;
use Tests\Abstract\AbstractUnitDtoBase;
use Webboy\MeasurementUnits\Enums\Units\AreaUnitEnum;
use Webboy\MeasurementUnits\Units\AreaUnitDto;

/**
 * Tests for AreaUnitDto and AreaUnitEnum.
 */
#[CoversClass(AreaUnitDto::class)]
#[CoversClass(AreaUnitEnum::class)]
class AreaUnitDtoTest extends AbstractUnitDtoBase
{
    /**
     * @inheritDoc
     * @return string
     */
    protected function createUnitClass(): string
    {
        return AreaUnitDto::class;
    }

    /**
     * @inheritDoc
     * @return string
     */
    protected function createUnitEnumClass(): string
    {
        return AreaUnitEnum::class;
    }
}
