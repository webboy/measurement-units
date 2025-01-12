<?php

namespace Units;

use Tests\Abstract\AbstractUnitDtoBase;
use Webboy\MeasurementUnits\Enums\Units\VolumeUnitEnum;
use Webboy\MeasurementUnits\Units\VolumeUnitDto;

class VolumeUnitDtoTest extends AbstractUnitDtoBase
{

    /**
     * @inheritDoc
     */
    protected function createUnitClass(): string
    {
        return VolumeUnitDto::class;
    }

    /**
     * @inheritDoc
     */
    protected function createUnitEnumClass(): string
    {
        return VolumeUnitEnum::class;
    }
}