<?php

namespace Webboy\MeasurementUnits\Units;

use Webboy\MeasurementUnits\Enums\Units\DistanceUnitEnum;
use Webboy\MeasurementUnits\Exceptions\UnitException;
use Webboy\MeasurementUnits\Exceptions\UnitExceptions\InvalidUnitIdUnitException;
use Webboy\MeasurementUnits\UnitDto;

/**
 * A distance unit DTO.
 */
class DistanceUnitDto extends UnitDto
{
    /**
     * Create a new distance unit DTO.
     *
     * @param DistanceUnitEnum $enum
     * @param string|null      $label
     * @throws InvalidUnitIdUnitException
     */
    public function __construct(DistanceUnitEnum $enum, ?string $label = null)
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
