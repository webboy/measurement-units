<?php

namespace Tests\Units;

use Tests\Abstract\AbstractUnitDtoBase;
use Webboy\MeasurementUnits\Enums\Units\DistanceUnitEnum;
use Webboy\MeasurementUnits\Units\DistanceUnitDto;

/**
 * @covers \Webboy\MeasurementUnits\Units\DistanceUnitDto
 * @covers \Webboy\MeasurementUnits\Enums\Units\DistanceUnitEnum
 */
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
