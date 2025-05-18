<?php

namespace Webboy\MeasurementUnits\Units;

use Closure;
use Webboy\MeasurementUnits\Exceptions\UnitExceptions\InvalidUnitIdUnitException;
use Webboy\MeasurementUnits\UnitDto;

/**
 * Class CustomUnitDto
 * @package Webboy\MeasurementUnits\Units
 */
class CustomUnitDto extends UnitDto
{
    /**
     * CustomUnitDto constructor.
     * @param integer|string               $id       The ID of the unit.
     * @param string                       $name     The name of the unit.
     * @param string                       $symbol   The symbol of the unit.
     * @param Closure                      $toBase   The function to convert to the base unit.
     * @param Closure                      $fromBase The function to convert from the base unit.
     * @param boolean                      $isBase   Whether the unit is the base unit.
     * @param false|array<int|string>|null $validIds The valid IDs for the unit.
     * @throws InvalidUnitIdUnitException If the unit ID is invalid.
     */
    public function __construct(
        int|string $id,
        string $name,
        string $symbol,
        Closure $toBase,
        Closure $fromBase,
        bool $isBase = false,
        false|array|null $validIds = null
    ) {
        parent::__construct(
            $id,
            $name,
            $symbol,
            $toBase,
            $fromBase,
            $isBase,
            $validIds
        );
    }
}
