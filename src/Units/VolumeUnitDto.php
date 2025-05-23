<?php

namespace Webboy\MeasurementUnits\Units;

use Webboy\MeasurementUnits\Enums\Units\VolumeUnitEnum;
use Webboy\MeasurementUnits\Exceptions\UnitException;
use Webboy\MeasurementUnits\Exceptions\UnitExceptions\InvalidUnitIdUnitException;
use Webboy\MeasurementUnits\UnitDto;

/**
 * A volume unit DTO.
 */
class VolumeUnitDto extends UnitDto
{
    /**
     * Create a new volume unit DTO.
     *
     * @param VolumeUnitEnum $enum  The volume unit enum.
     * @param string|null    $label The label.
     * @throws InvalidUnitIdUnitException If the unit ID is invalid.
     */
    public function __construct(VolumeUnitEnum $enum, ?string $label = null)
    {
        parent::__construct(
            id: $enum->value,
            name: $label ?? $enum->label(),
            symbol: $enum->symbol(),
            toBase: $enum->toBase(),
            fromBase: $enum->fromBase(),
        );
    }
}
