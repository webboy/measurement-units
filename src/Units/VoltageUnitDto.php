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
     * @throws InvalidUnitIdUnitException
     */
    public function __construct(VoltageUnitEnum $enum)
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