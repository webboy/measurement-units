<?php

namespace Tests\Units;

use PHPUnit\Framework\Attributes\CoversClass;
use Tests\Abstract\AbstractUnitDtoBase;
use Webboy\MeasurementUnits\Enums\Units\TemperatureUnitEnum;
use Webboy\MeasurementUnits\Units\TemperatureUnitDto;

/**
 * Tests for TemperatureUnitDto and TemperatureUnitEnum.
 */
#[CoversClass(TemperatureUnitDto::class)]
#[CoversClass(TemperatureUnitEnum::class)]
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
