<?php

namespace Webboy\MeasurementUnits\Enums\Interfaces;

use Closure;

interface UnitEnumInterface
{
    /**
     * @return integer|string
     */
    public function value(): int|string;

    /**
     * @return string
     */
    public function label(): string;

    /**
     * @return string
     */
    public function symbol(): string;

    /**
     * @return Closure
     */
    public function toBase(): Closure;

    /**
     * @return Closure
     */
    public function fromBase(): Closure;
}
