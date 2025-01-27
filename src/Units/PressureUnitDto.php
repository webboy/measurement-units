<?php

namespace Webboy\MeasurementUnits\Units;

use Webboy\MeasurementUnits\Enums\Units\PressureUnitEnum;
use Webboy\MeasurementUnits\Exceptions\UnitException;
use Webboy\MeasurementUnits\Exceptions\UnitExceptions\InvalidUnitIdUnitException;
use Webboy\MeasurementUnits\UnitDto;

/**
 * A pressure unit DTO.
 */
class PressureUnitDto extends UnitDto
{
    /**
     * Create a new pressure unit DTO.
     *
     * @param PressureUnitEnum $enum
     * @param string|null $label
     * @throws InvalidUnitIdUnitException
     */
    public function __construct(PressureUnitEnum $enum, ?string $label = null)
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
