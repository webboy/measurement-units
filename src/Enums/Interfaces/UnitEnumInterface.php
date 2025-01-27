<?php

namespace Webboy\MeasurementUnits\Enums\Interfaces;

use Closure;

interface UnitEnumInterface
{
    public function value(): int|string;

    public function label(): string;

    public function symbol(): string;

    public function toBase(): Closure;

    public function fromBase(): Closure;

}
