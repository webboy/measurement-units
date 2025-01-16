<?php

namespace Webboy\MeasurementUnits\Units;

use Webboy\MeasurementUnits\Enums\Units\BatteryCapacityUnitEnum;
use Webboy\MeasurementUnits\Exceptions\UnitException;
use Webboy\MeasurementUnits\Exceptions\UnitExceptions\InvalidUnitIdUnitException;
use Webboy\MeasurementUnits\UnitDto;

/**
 * A battery capacity unit DTO.
 */
class BatteryCapacityUnitDto extends UnitDto
{
    /**
     * Create a new battery capacity unit DTO.
     *
     * @param BatteryCapacityUnitEnum $enum
     * @throws InvalidUnitIdUnitException
     */
    public function __construct(BatteryCapacityUnitEnum $enum)
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