<?php

namespace Webboy\MeasurementUnits\Enums\Units;

use Closure;

enum VoltageUnitEnum: string
{
    case VOLT = 'V';
    case MILLIVOLT = 'mV';
    case KILOVOLT = 'kV';

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
            self::VOLT => fn($value) => $value,
            self::MILLIVOLT => fn($value) => $value / 1000,
            self::KILOVOLT => fn($value) => $value * 1000,
        };
    }

    // From base
    public function fromBase(): Closure
    {
        return match ($this) {
            self::VOLT => fn($value) => $value,
            self::MILLIVOLT => fn($value) => $value * 1000,
            self::KILOVOLT => fn($value) => $value / 1000,
        };
    }
}