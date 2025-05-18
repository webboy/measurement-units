<?php

namespace Tests\Units;

use PHPUnit\Framework\Attributes\CoversClass;
use Tests\Abstract\AbstractUnitDtoBase;
use Webboy\MeasurementUnits\Enums\Units\DistanceUnitEnum;
use Webboy\MeasurementUnits\Units\DistanceUnitDto;

/**
 * Tests for DistanceUnitDto and DistanceUnitEnum.
 */
#[CoversClass(DistanceUnitDto::class)]
#[CoversClass(DistanceUnitEnum::class)]
class DistanceUnitDtoTest extends AbstractUnitDtoBase
{
    /**
     * @inheritDoc
     * @return string
     */
    protected function createUnitClass(): string
    {
        return DistanceUnitDto::class;
    }

    /**
     * @inheritDoc
     * @return string
     */
    protected function createUnitEnumClass(): string
    {
        return DistanceUnitEnum::class;
    }
}
