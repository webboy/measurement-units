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
     * @param VoltageUnitEnum $enum
     * @param null $label
     * @throws InvalidUnitIdUnitException
     */
    public function __construct(VoltageUnitEnum $enum, $label = null)
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
