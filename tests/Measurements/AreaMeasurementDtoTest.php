<?php

namespace Tests\Measurements;

use PHPUnit\Framework\Attributes\CoversClass;
use Tests\Abstract\AbstractMeasurementDtoBase;
use Webboy\MeasurementUnits\Enums\Units\AreaUnitEnum;
use Webboy\MeasurementUnits\Measurements\AreaMeasurementDto;

/**
 * Tests for AreaMeasurementDto.
 */
#[CoversClass(AreaMeasurementDto::class)]
class AreaMeasurementDtoTest extends AbstractMeasurementDtoBase
{
    /**
     * @return AreaMeasurementDto
     */
    protected function createMeasurementDto(): AreaMeasurementDto
    {
        return new AreaMeasurementDto();
    }

    /**
     * @return string
     */
    protected function createUnitEnumClass(): string
    {
        return AreaUnitEnum::class;
    }
}
