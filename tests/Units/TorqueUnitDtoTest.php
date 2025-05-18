<?php

namespace Tests\Units;

use Tests\Abstract\AbstractUnitDtoBase;
use Webboy\MeasurementUnits\Enums\Units\TorqueUnitEnum;
use Webboy\MeasurementUnits\Units\TorqueUnitDto;

/**
 * @covers \Webboy\MeasurementUnits\Units\TorqueUnitDto
 * @covers \Webboy\MeasurementUnits\Enums\Units\TorqueUnitEnum
 */
class TorqueUnitDtoTest extends AbstractUnitDtoBase
{
    /**
     * @inheritDoc
     * @return string
     */
    protected function createUnitClass(): string
    {
        return TorqueUnitDto::class;
    }

    /**
     * @inheritDoc
     * @return string
     */
    protected function createUnitEnumClass(): string
    {
        return TorqueUnitEnum::class;
    }
}
