<?php

namespace Webboy\MeasurementUnits\Enums\Units;

use Closure;
use Webboy\MeasurementUnits\Enums\Interfaces\UnitEnumInterface;

enum VoltageUnitEnum: int implements UnitEnumInterface
{
    case VOLT = 100;
    case MILLIVOLT = 101;
    case KILOVOLT = 102;

    // Labels
    public function label(): string
    {
        return match ($this) {
            self::VOLT => 'Volt',
            self::MILLIVOLT => 'Millivolt',
            self::KILOVOLT => 'Kilovolt',
        };
    }

    // Symbols
    public function symbol(): string
    {
        return match ($this) {
            self::VOLT => 'V',
            self::MILLIVOLT => 'mV',
            self::KILOVOLT => 'kV',
        };
    }

    // To base
    public function toBase(): Closure
    {
        return match ($this) {
            self::VOLT => fn ($value) => $value,
            self::MILLIVOLT => fn ($value) => $value / 1000,
            self::KILOVOLT => fn ($value) => $value * 1000,
        };
    }

    // From base
    public function fromBase(): Closure
    {
        return match ($this) {
            self::VOLT => fn ($value) => $value,
            self::MILLIVOLT => fn ($value) => $value * 1000,
            self::KILOVOLT => fn ($value) => $value / 1000,
        };
    }

    public function value(): int
    {
        return $this->value;
    }
}
