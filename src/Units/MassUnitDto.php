<?php

namespace Webboy\MeasurementUnits\Units;

use Webboy\MeasurementUnits\Enums\Units\MassUnitEnum;
use Webboy\MeasurementUnits\Exceptions\UnitException;
use Webboy\MeasurementUnits\Exceptions\UnitExceptions\InvalidUnitIdUnitException;
use Webboy\MeasurementUnits\UnitDto;

/**
 * A mass unit DTO.
 */
class MassUnitDto extends UnitDto
{
    /**
     * Create a new mass unit DTO.
     *
     * @param MassUnitEnum $enum
     * @param string|null  $label
     * @throws InvalidUnitIdUnitException
     */
    public function __construct(MassUnitEnum $enum, ?string $label = null)
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
