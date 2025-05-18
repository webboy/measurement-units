<?php

namespace Webboy\MeasurementUnits\Units;

use Webboy\MeasurementUnits\Enums\Units\AreaUnitEnum;
use Webboy\MeasurementUnits\Exceptions\UnitException;
use Webboy\MeasurementUnits\Exceptions\UnitExceptions\InvalidUnitIdUnitException;
use Webboy\MeasurementUnits\UnitDto;

/**
 * An area unit DTO.
 */
class AreaUnitDto extends UnitDto
{
    /**
     * Create a new area unit DTO.
     *
     * @param AreaUnitEnum $enum  The area unit enum.
     * @param string|null  $label The label for the unit, or null to use the enum's label.
     * @throws InvalidUnitIdUnitException If the unit ID is invalid.
     */
    public function __construct(AreaUnitEnum $enum, ?string $label = null)
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
