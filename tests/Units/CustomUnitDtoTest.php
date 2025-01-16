<?php

namespace Tests\Units;

use PHPUnit\Framework\TestCase;
use Webboy\MeasurementUnits\Exceptions\UnitExceptions\InvalidUnitIdUnitException;
use Webboy\MeasurementUnits\Units\CustomUnitDto;

class CustomUnitDtoTest extends TestCase
{
    public function testFailsOnInvalidUnitId()
    {
        $this->expectException(InvalidUnitIdUnitException::class);

        $dto = new CustomUnitDto(
            id: 'invalid',
            name: 'Invalid Unit',
            symbol: 'IU',
            toBase: fn($value) => $value,
            fromBase: fn($value) => $value,
            validIds: ['valid'],
        );
    }
}