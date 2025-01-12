<?php

namespace Tests\Units;

use Tests\Abstract\AbstractUnitDtoBase;
use Webboy\MeasurementUnits\Enums\Units\DistanceUnitEnum;
use Webboy\MeasurementUnits\Units\DistanceUnitDto;

class DistanceUnitDtoTest extends AbstractUnitDtoBase
{

    /**
     * @inheritDoc
     */
    protected function createUnitClass(): string
    {
        return DistanceUnitDto::class;
    }

    /**
     * @inheritDoc
     */
    protected function createUnitEnumClass(): string
    {
        return DistanceUnitEnum::class;
    }
}