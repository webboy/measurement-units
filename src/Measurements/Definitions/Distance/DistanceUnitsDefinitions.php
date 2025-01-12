<?php

use Webboy\MeasurementUnits\Enums\Units\DistanceUnitEnum;
use Webboy\MeasurementUnits\Units\DistanceUnitDto;

return [
    // 🌍 Metric System (SI Units)
    new DistanceUnitDto(
        id: DistanceUnitEnum::MILLIMETER->value,
        name: 'Millimeter',
        symbol: 'mm',
        toBase: fn($x) => $x / 1000,         // mm → m
        fromBase: fn($x) => $x * 1000        // m → mm
    ),
    new DistanceUnitDto(
        id: DistanceUnitEnum::CENTIMETER->value,
        name: 'Centimeter',
        symbol: 'cm',
        toBase: fn($x) => $x / 100,          // cm → m
        fromBase: fn($x) => $x * 100         // m → cm
    ),
    new DistanceUnitDto(
        id: DistanceUnitEnum::METER->value,
        name: 'Meter',
        symbol: 'm',
        toBase: fn($x) => $x * 1,            // m → m
        fromBase: fn($x) => $x / 1           // m → m
    ),
    new DistanceUnitDto(
        id: DistanceUnitEnum::KILOMETER->value,
        name: 'Kilometer',
        symbol: 'km',
        toBase: fn($x) => $x * 1000,         // km → m
        fromBase: fn($x) => $x / 1000        // m → km
    ),

    // 🇬🇧 Imperial/US Customary Units
    new DistanceUnitDto(
        id: DistanceUnitEnum::INCH->value,
        name: 'Inch',
        symbol: 'in',
        toBase: fn($x) => $x * 0.0254,       // in → m
        fromBase: fn($x) => $x / 0.0254      // m → in
    ),
    new DistanceUnitDto(
        id: DistanceUnitEnum::FOOT->value,
        name: 'Foot',
        symbol: 'ft',
        toBase: fn($x) => $x * 0.3048,       // ft → m
        fromBase: fn($x) => $x / 0.3048      // m → ft
    ),
    new DistanceUnitDto(
        id: DistanceUnitEnum::YARD->value,
        name: 'Yard',
        symbol: 'yd',
        toBase: fn($x) => $x * 0.9144,       // yd → m
        fromBase: fn($x) => $x / 0.9144      // m → yd
    ),
    new DistanceUnitDto(
        id: DistanceUnitEnum::MILE->value,
        name: 'Mile',
        symbol: 'mi',
        toBase: fn($x) => $x * 1609.344,     // mi → m
        fromBase: fn($x) => $x / 1609.344    // m → mi
    ),

    // 🌊 Nautical Units
    new DistanceUnitDto(
        id: DistanceUnitEnum::NAUTICAL_MILE->value,
        name: 'Nautical Mile',
        symbol: 'nmi',
        toBase: fn($x) => $x * 1852,         // nmi → m
        fromBase: fn($x) => $x / 1852        // m → nmi
    ),
    new DistanceUnitDto(
        id: DistanceUnitEnum::FATHOM->value,
        name: 'Fathom',
        symbol: 'ftm',
        toBase: fn($x) => $x * 1.8288,       // ftm → m
        fromBase: fn($x) => $x / 1.8288      // m → ftm
    ),

    // 📏 Surveying Units
    new DistanceUnitDto(
        id: DistanceUnitEnum::ROD->value,
        name: 'Rod',
        symbol: 'rd',
        toBase: fn($x) => $x * 5.0292,       // rd → m
        fromBase: fn($x) => $x / 5.0292      // m → rd
    ),
    new DistanceUnitDto(
        id: DistanceUnitEnum::CHAIN->value,
        name: 'Chain',
        symbol: 'ch',
        toBase: fn($x) => $x * 20.1168,      // ch → m
        fromBase: fn($x) => $x / 20.1168     // m → ch
    ),
    new DistanceUnitDto(
        id: DistanceUnitEnum::FURLONG->value,
        name: 'Furlong',
        symbol: 'fur',
        toBase: fn($x) => $x * 201.168,      // fur → m
        fromBase: fn($x) => $x / 201.168     // m → fur
    ),

    // 🏇 Other Traditional Units
    new DistanceUnitDto(
        id: DistanceUnitEnum::LEAGUE->value,
        name: 'League',
        symbol: 'lea',
        toBase: fn($x) => $x * 4828.032,     // lea → m
        fromBase: fn($x) => $x / 4828.032    // m → lea
    ),
    new DistanceUnitDto(
        id: DistanceUnitEnum::HAND->value,
        name: 'Hand',
        symbol: 'hh',
        toBase: fn($x) => $x * 0.1016,       // hh → m
        fromBase: fn($x) => $x / 0.1016      // m → hh
    ),
];
