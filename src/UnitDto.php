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
     * Create a new unit DTO.
     *
     * @param int|string $id The ID of the unit.
     * @param string $name The name of the unit.
     * @param string $symbol The symbol of the unit.
     * @param Closure $toBase The closure to convert to the base unit.
     * @param Closure $fromBase The closure to convert from the base unit.
     * @param array|null $validIds The valid IDs for the unit.
     * @throws UnitException
     */
    public function __construct(
        int | string $id,
        string $name,
        string $symbol,
        Closure $toBase,
        Closure $fromBase,
        protected readonly ?array $validIds = null
    ) {
        //Validate ID
        if ($this->validIds !== null && !in_array($id, $this->validIds)) {
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