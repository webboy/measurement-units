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
     * @param VolumeUnitEnum $enum The volume unit enum.
     * @throws InvalidUnitIdUnitException
     */
    public function __construct(VolumeUnitEnum $enum)
    {
        parent::__construct(
            id: $enum->value,
            name: $enum->label(),
            symbol: $enum->symbol(),
            toBase: $enum->toBase(),
            fromBase: $enum->fromBase(),
        );
    }
}