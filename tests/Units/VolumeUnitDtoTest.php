<?php

namespace Tests\Units;

use PHPUnit\Framework\Attributes\CoversClass;
use Tests\Abstract\AbstractUnitDtoBase;
use Webboy\MeasurementUnits\Enums\Units\VolumeUnitEnum;
use Webboy\MeasurementUnits\Units\VolumeUnitDto;

/**
 * Tests for VolumeUnitDto and VolumeUnitEnum.
 */
#[CoversClass(VolumeUnitDto::class)]
#[CoversClass(VolumeUnitEnum::class)]
class VolumeUnitDtoTest extends AbstractUnitDtoBase
{
    /**
     * @inheritDoc
     * @return string
     */
    protected function createUnitClass(): string
    {
        return VolumeUnitDto::class;
    }

    /**
     * @inheritDoc
     * @return string
     */
    protected function createUnitEnumClass(): string
    {
        return VolumeUnitEnum::class;
    }
}
