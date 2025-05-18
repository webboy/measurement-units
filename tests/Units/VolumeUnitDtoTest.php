<?php

namespace Tests\Units;

use Tests\Abstract\AbstractUnitDtoBase;
use Webboy\MeasurementUnits\Enums\Units\VolumeUnitEnum;
use Webboy\MeasurementUnits\Units\VolumeUnitDto;

/**
 * @covers \Webboy\MeasurementUnits\Units\VolumeUnitDto
 * @covers \Webboy\MeasurementUnits\Enums\Units\VolumeUnitEnum
 */
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
