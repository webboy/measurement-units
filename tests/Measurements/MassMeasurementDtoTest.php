<?php

namespace Tests\Measurements;

use PHPUnit\Framework\Attributes\CoversClass;
use Tests\Abstract\AbstractMeasurementDtoBase;
use Webboy\MeasurementUnits\Enums\Units\MassUnitEnum;
use Webboy\MeasurementUnits\Measurements\MassMeasurementDto;

/**
 * Tests for MassMeasurementDto.
 */
#[CoversClass(MassMeasurementDto::class)]
class MassMeasurementDtoTest extends AbstractMeasurementDtoBase
{
    /**
     * @return MassMeasurementDto
     */
    protected function createMeasurementDto(): MassMeasurementDto
    {
        return new MassMeasurementDto();
    }

    /**
     * @return string
     */
    protected function createUnitEnumClass(): string
    {
        return MassUnitEnum::class;
    }
}
