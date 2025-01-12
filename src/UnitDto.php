<?php

namespace Webboy\MeasurementUnits;

use Closure;
use Webboy\MeasurementUnits\Exceptions\UnitException;
use Webboy\MeasurementUnits\Exceptions\UnitExceptions\InvalidUnitIdUnitException;

/**
 * The base class for all measurement DTOs.
 */
abstract class UnitDto
{
    /**
     * @var int|string The ID of the unit.
     */
    public int | string $id;

    /**
     * @var string The name of the unit.
     */
    public string $name;

    /**
     * @var string The symbol of the unit.
     */
    public string $symbol;

    /**
     * @var Closure The closure to convert the unit to the base unit.
     */
    protected Closure $toBase;

    /**
     * @var Closure The closure to convert the unit from the base unit.
     */
    protected Closure $fromBase;

    /**
     * @var class-string The class name of the unit enum.
     */
    protected string $unitEnumClass;

    /**
     * @throws UnitException
     */
    public function __construct(
        int | string $id,
        string $name,
        string $symbol,
        Closure $toBase,
        Closure $fromBase
    ) {
        //Validate ID
        if ($this->unitEnumClass::tryFrom($id) === null) {
            throw new InvalidUnitIdUnitException($id);
        }

        $this->id = $id;
        $this->name = $name;
        $this->symbol = $symbol;
        $this->toBase = $toBase;
        $this->fromBase = $fromBase;
    }

    /**
     * @return Closure
     */
    public function getToBase(): Closure
    {
        return $this->toBase;
    }

    /**
     * @return Closure
     */
    public function getFromBase(): Closure
    {
        return $this->fromBase;
    }
}