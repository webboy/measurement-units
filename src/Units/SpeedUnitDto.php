<?php

namespace Webboy\MeasurementUnits\Units;

use Webboy\MeasurementUnits\Enums\Units\SpeedUnitEnum;
use Webboy\MeasurementUnits\Exceptions\UnitException;
use Webboy\MeasurementUnits\Exceptions\UnitExceptions\InvalidUnitIdUnitException;
use Webboy\MeasurementUnits\UnitDto;

/**
 * A speed unit DTO.
 */
class SpeedUnitDto extends UnitDto
{
    /**
     * Create a new speed unit DTO.
     *
     * @param SpeedUnitEnum $enum
     * @param string|null   $label
     * @throws InvalidUnitIdUnitException
     */
    public function __construct(SpeedUnitEnum $enum, ?string $label = null)
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
