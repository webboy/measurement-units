<?php

namespace Tests\Units;

use PHPUnit\Framework\Attributes\CoversClass;
use Tests\Abstract\AbstractUnitDtoBase;
use Webboy\MeasurementUnits\Enums\Units\VoltageUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\VolumeUnitEnum;
use Webboy\MeasurementUnits\Units\VoltageUnitDto;
use Webboy\MeasurementUnits\Units\VolumeUnitDto;

/**
 * Tests for VoltageUnitDto and VoltageUnitEnum.
 */
#[CoversClass(VoltageUnitDto::class)]
#[CoversClass(VoltageUnitEnum::class)]
class VoltageUnitDtoTest extends AbstractUnitDtoBase
{
    /**
     * @inheritDoc
     * @return string
     */
    protected function createUnitClass(): string
    {
        return VoltageUnitDto::class;
    }

    /**
     * @inheritDoc
     * @return string
     */
    protected function createUnitEnumClass(): string
    {
        return VoltageUnitEnum::class;
    }
}
