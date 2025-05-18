<?php

namespace Tests\Units;

use Tests\Abstract\AbstractUnitDtoBase;
use Webboy\MeasurementUnits\Enums\Units\VoltageUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\VolumeUnitEnum;
use Webboy\MeasurementUnits\Units\VoltageUnitDto;
use Webboy\MeasurementUnits\Units\VolumeUnitDto;

/**
 * @covers \Webboy\MeasurementUnits\Units\VoltageUnitDto
 * @covers \Webboy\MeasurementUnits\Enums\Units\VoltageUnitEnum
 */
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
