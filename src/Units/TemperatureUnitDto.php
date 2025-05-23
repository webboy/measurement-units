<?php

namespace Webboy\MeasurementUnits\Units;

use Webboy\MeasurementUnits\Enums\Units\TemperatureUnitEnum;
use Webboy\MeasurementUnits\Exceptions\UnitException;
use Webboy\MeasurementUnits\Exceptions\UnitExceptions\InvalidUnitIdUnitException;
use Webboy\MeasurementUnits\UnitDto;

/**
 * A temperature unit DTO.
 */
class TemperatureUnitDto extends UnitDto
{
    /**
     * Create a new temperature unit DTO.
     *
     * @param TemperatureUnitEnum $enum  The temperature unit enum.
     * @param string|null         $label The label for the unit, or null to use the enum's label.
     * @throws InvalidUnitIdUnitException If the unit ID is invalid.
     */
    public function __construct(TemperatureUnitEnum $enum, ?string $label = null)
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
