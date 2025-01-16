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
     * @param AreaUnitEnum $enum
     * @throws InvalidUnitIdUnitException
     */
    public function __construct(AreaUnitEnum $enum)
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