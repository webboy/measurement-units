<?php

namespace Tests\Units;

use Tests\Abstract\AbstractUnitDtoBase;
use Webboy\MeasurementUnits\Enums\Units\TemperatureUnitEnum;
use Webboy\MeasurementUnits\Units\TemperatureUnitDto;

/**
 * @covers \Webboy\MeasurementUnits\Units\TemperatureUnitDto
 * @covers \Webboy\MeasurementUnits\Enums\Units\TemperatureUnitEnum
 */
class TemperatureUnitDtoTest extends AbstractUnitDtoBase
{
    /**
     * @inheritDoc
     * @return string
     */
    protected function createUnitClass(): string
    {
        return TemperatureUnitDto::class;
    }

    /**
     * @inheritDoc
     * @return string
     */
    protected function createUnitEnumClass(): string
    {
        return TemperatureUnitEnum::class;
    }
}
