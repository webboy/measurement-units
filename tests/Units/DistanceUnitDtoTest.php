<?php

namespace Units;

use PHPUnit\Framework\TestCase;
use Webboy\MeasurementUnits\Enums\Units\DistanceUnitEnum;
use Webboy\MeasurementUnits\Exceptions\UnitException;
use Webboy\MeasurementUnits\Exceptions\UnitExceptions\InvalidUnitIdUnitException;
use Webboy\MeasurementUnits\Units\DistanceUnitDto;

class DistanceUnitDtoTest extends TestCase
{
    /**
     * @throws UnitException
     */
    public function testSuccessfulConstructionWithValidId(): void
    {
        // Arrange: Create valid inputs
        $validId = DistanceUnitEnum::METER->value; // Replace with a valid DistanceUnitEnum value
        $name = 'Meter';
        $symbol = 'm';
        $toBase = (fn($value) => $value * 1.0)(...); // Mock implementation
        $fromBase = (fn($value) => $value / 1.0)(...); // Mock implementation

        // Act: Create the DTO object
        $dto = new DistanceUnitDto($validId, $name, $symbol, $toBase, $fromBase);

        // Assert: Validate that properties are correctly set
        $this->assertSame($validId, $dto->id);
        $this->assertSame($name, $dto->name);
        $this->assertSame($symbol, $dto->symbol);
        $this->assertSame($toBase, $dto->getToBase());
        $this->assertSame($fromBase, $dto->getFromBase());
    }

    /**
     * @throws UnitException
     */
    public function testThrowsExceptionForInvalidId(): void
    {
        // Arrange: Create invalid inputs
        $invalidId = 'invalid'; // This is not a valid DistanceUnitEnum value
        $name = 'Invalid Unit';
        $symbol = '?';
        $toBase = (fn($value) => $value * 1.0)(...); // Mock implementation
        $fromBase = (fn($value) => $value / 1.0)(...); // Mock implementation

        // Assert: Expect a UnitException
        $this->expectException(InvalidUnitIdUnitException::class);

        // Act: Attempt to create the DTO object
        new DistanceUnitDto($invalidId, $name, $symbol, $toBase, $fromBase);
    }
}
