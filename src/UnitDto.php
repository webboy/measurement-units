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
     * @var bool Whether the unit is the base unit.
     */
    public bool $isBase = false;

    /**
     * @var Closure The closure to convert the unit to the base unit.
     */
    protected Closure $toBase;

    /**
     * @var Closure The closure to convert the unit from the base unit.
     */
    protected Closure $fromBase;

    /**
     * Create a new unit DTO.
     *
     * @param int|string $id The ID of the unit.
     * @param string $name The name of the unit.
     * @param string $symbol The symbol of the unit.
     * @param Closure $toBase The closure to convert to the base unit.
     * @param Closure $fromBase The closure to convert from the base unit.
     * @param bool $isBase Whether the unit is the base unit.
     * @param array|false|null $validIds The valid IDs for the unit.
     * @throws InvalidUnitIdUnitException
     */
    public function __construct(
        int | string $id,
        string $name,
        string $symbol,
        Closure $toBase,
        Closure $fromBase,
        bool $isBase = false,
        protected readonly array | null | false $validIds = null
    ) {
        //Validate ID
        if (is_array($this->validIds) && !in_array($id, $this->validIds, true)) {
            throw new InvalidUnitIdUnitException($id);
        }

        $this->id = $id;
        $this->name = $name;
        $this->symbol = $symbol;
        $this->toBase = $toBase;
        $this->fromBase = $fromBase;
        $this->isBase = $isBase;
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
