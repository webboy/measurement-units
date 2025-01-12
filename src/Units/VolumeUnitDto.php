<?php

namespace Webboy\MeasurementUnits\Units;

use Webboy\MeasurementUnits\Enums\Units\VolumeUnitEnum;
use Webboy\MeasurementUnits\Exceptions\UnitException;
use Webboy\MeasurementUnits\UnitDto;

/**
 * A volume unit DTO.
 */
class VolumeUnitDto extends UnitDto
{
    /**
     * Create a new volume unit DTO.
     *
     * @param int|string $id The ID of the unit.
     * @param string $name The name of the unit.
     * @param string $symbol The symbol of the unit.
     * @param callable $toBase The function to convert to the base unit.
     * @param callable $fromBase The function to convert from the base unit.
     * @throws UnitException
     */
    public function __construct(int | string $id, string $name, string $symbol, callable $toBase, callable $fromBase)
    {
        parent::__construct(
            id: $id,
            name: $name,
            symbol: $symbol,
            toBase: $toBase,
            fromBase: $fromBase,
            validIds: array_map(fn($unit) => $unit->value, VolumeUnitEnum::cases())
        );
    }
}