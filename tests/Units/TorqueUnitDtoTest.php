<?php

namespace Tests\Units;

use PHPUnit\Framework\Attributes\CoversClass;
use Tests\Abstract\AbstractUnitDtoBase;
use Webboy\MeasurementUnits\Enums\Units\TorqueUnitEnum;
use Webboy\MeasurementUnits\Units\TorqueUnitDto;

/**
 * Tests for TorqueUnitDto and TorqueUnitEnum.
 */
#[CoversClass(TorqueUnitDto::class)]
#[CoversClass(TorqueUnitEnum::class)]
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
