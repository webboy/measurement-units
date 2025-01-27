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
     * @param int|string $id
     * @param string $name
     * @param string $symbol
     * @param Closure $toBase
     * @param Closure $fromBase
     * @param bool $isBase
     * @param false|array|null $validIds
     * @throws InvalidUnitIdUnitException
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
