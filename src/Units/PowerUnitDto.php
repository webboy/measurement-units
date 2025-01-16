<?php

namespace Webboy\MeasurementUnits\Units;

use Webboy\MeasurementUnits\Enums\Units\PowerUnitEnum;
use Webboy\MeasurementUnits\Exceptions\UnitException;
use Webboy\MeasurementUnits\Exceptions\UnitExceptions\InvalidUnitIdUnitException;
use Webboy\MeasurementUnits\UnitDto;

/**
 * A power unit DTO.
 */
class PowerUnitDto extends UnitDto
{
    /**
     * Create a new power unit DTO.
     *
     * @param PowerUnitEnum $enum
     * @throws InvalidUnitIdUnitException
     */
    public function __construct(PowerUnitEnum $enum)
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