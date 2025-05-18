<?php

namespace Tests\Units;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use Webboy\MeasurementUnits\Exceptions\UnitExceptions\InvalidUnitIdUnitException;
use Webboy\MeasurementUnits\Units\CustomUnitDto;

/**
 * Tests for CustomUnitDto and InvalidUnitIdUnitException.
 */
#[CoversClass(CustomUnitDto::class)]
#[CoversClass(InvalidUnitIdUnitException::class)]
class CustomUnitDtoTest extends TestCase
{
    /**
     * Tests that an InvalidUnitIdUnitException is thrown for an invalid unit ID.
     *
     * @return void
     * @throws InvalidUnitIdUnitException If the provided unit ID is not in the list of valid IDs.
     */
    public function testFailsOnInvalidUnitId(): void
    {
        $this->expectException(InvalidUnitIdUnitException::class);

        $dto = new CustomUnitDto(
            id: 'invalid',
            name: 'Invalid Unit',
            symbol: 'IU',
            toBase: fn ($value) => $value,
            fromBase: fn ($value) => $value,
            validIds: ['valid'],
        );
    }
}
