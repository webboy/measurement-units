<?php

namespace Webboy\MeasurementUnits\Units;

use Webboy\MeasurementUnits\Enums\Units\FuelConsumptionUnitEnum;
use Webboy\MeasurementUnits\Exceptions\UnitException;
use Webboy\MeasurementUnits\Exceptions\UnitExceptions\InvalidUnitIdUnitException;
use Webboy\MeasurementUnits\UnitDto;

/**
 * A fuel consumption unit DTO.
 */
class FuelConsumptionUnitDto extends UnitDto
{
    /**
     * Create a new fuel consumption unit DTO.
     *
     * @param FuelConsumptionUnitEnum $enum
     * @param null $label
     * @throws InvalidUnitIdUnitException
     */
    public function __construct(FuelConsumptionUnitEnum $enum, $label = null)
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
