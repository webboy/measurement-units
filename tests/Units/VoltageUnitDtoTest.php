<?php

namespace Tests\Units;

use Tests\Abstract\AbstractUnitDtoBase;
use Webboy\MeasurementUnits\Enums\Units\VoltageUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\VolumeUnitEnum;
use Webboy\MeasurementUnits\Units\VoltageUnitDto;
use Webboy\MeasurementUnits\Units\VolumeUnitDto;

class VoltageUnitDtoTest extends AbstractUnitDtoBase
{
    /**
     * @inheritDoc
     */
    protected function createUnitClass(): string
    {
        return VoltageUnitDto::class;
    }

    /**
     * @inheritDoc
     */
    protected function createUnitEnumClass(): string
    {
        return VoltageUnitEnum::class;
    }
}
