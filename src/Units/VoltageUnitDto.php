<?php

namespace Webboy\MeasurementUnits\Units;

use Webboy\MeasurementUnits\Enums\Units\VoltageUnitEnum;
use Webboy\MeasurementUnits\Exceptions\UnitExceptions\InvalidUnitIdUnitException;
use Webboy\MeasurementUnits\UnitDto;

/**
 * A voltage unit DTO.
 */
class VoltageUnitDto extends UnitDto
{
    /**
     * Create a new voltage unit DTO.
     *
     * @param VoltageUnitEnum $enum  The voltage unit enum.
     * @param string|null     $label The label for the unit, or null to use the enum's label.
     * @throws InvalidUnitIdUnitException If the unit ID is invalid.
     */
    public function __construct(VoltageUnitEnum $enum, ?string $label = null)
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
