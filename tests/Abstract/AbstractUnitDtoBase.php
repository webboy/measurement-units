<?php

namespace Tests\Abstract;

use PHPUnit\Framework\TestCase;
use Webboy\MeasurementUnits\Exceptions\UnitExceptions\InvalidUnitIdUnitException;
use Webboy\MeasurementUnits\UnitDto;

abstract class AbstractUnitDtoBase extends TestCase
{
    /**
     * @var class-string The class name of the unit DTO.
     */
    protected string $unit_class;

    /**
     * @var class-string The class name of the unit enum.
     */
    protected string $unit_enum_class;

    /**
     * @return string The class name of the unit DTO.
     */
    abstract protected function createUnitClass(): string;

    /**
     * @return string The class name of the unit enum.
     */

    abstract protected function createUnitEnumClass(): string;

    protected function setUp(): void
    {
        parent::setUp();
        $this->unit_class = $this->createUnitClass();
        $this->unit_enum_class = $this->createUnitEnumClass();
    }

    /**
     * Test the successful creation of the unit DTO.
     */
    public function testSuccessfulCreation(): void
    {
        $unitDto = new $this->unit_class(
            id: $this->unit_enum_class::cases()[0]->value,
            name: $this->unit_enum_class::cases()[0]->name,
            symbol: 'symbol',
            toBase: fn($value) => $value,
            fromBase: fn($value) => $value
        );

        $this->assertInstanceOf($this->unit_class, $unitDto);
    }

    public function testFailCreationInvalidUnitId()
    {
        $this->expectException(InvalidUnitIdUnitException::class);

        $unitDto = new $this->unit_class(
            id: 'invalid',
            name: $this->unit_enum_class::cases()[0]->name,
            symbol: 'symbol',
            toBase: fn($value) => $value,
            fromBase: fn($value) => $value
        );
    }
}