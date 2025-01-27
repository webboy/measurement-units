<?php

namespace Webboy\MeasurementUnits\Units;

use Webboy\MeasurementUnits\Enums\Units\TorqueUnitEnum;
use Webboy\MeasurementUnits\Exceptions\UnitException;
use Webboy\MeasurementUnits\Exceptions\UnitExceptions\InvalidUnitIdUnitException;
use Webboy\MeasurementUnits\UnitDto;

/**
 * A torque unit DTO.
 */
class TorqueUnitDto extends UnitDto
{
    /**
     * Create a new torque unit DTO.
     *
     * @param TorqueUnitEnum $enum
     * @param null $label
     * @throws InvalidUnitIdUnitException
     */
    public function __construct(TorqueUnitEnum $enum, $label = null)
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
