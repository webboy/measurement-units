<?php

namespace Tests\Abstract;

use PHPUnit\Framework\TestCase;
use Webboy\MeasurementUnits\Exceptions\UnitExceptions\InvalidUnitIdUnitException;
use Webboy\MeasurementUnits\UnitDto;

/**
 * Class AbstractUnitDtoBase
 * @package Tests\Abstract
 */
abstract class AbstractUnitDtoBase extends TestCase
{
    /**
     * @var class-string The class name of the unit DTO.
     */
    protected string $unit_class;

    /**
     * @var class-string<\BackedEnum&\Webboy\MeasurementUnits\Enums\Interfaces\UnitEnumInterface> The class name of the unit enum.
     */
    protected string $unit_enum_class;

    /**
     * @return class-string The class name of the unit DTO.
     */
    abstract protected function createUnitClass(): string;

    /**
     * @return class-string<\BackedEnum&\Webboy\MeasurementUnits\Enums\Interfaces\UnitEnumInterface> The class name of the unit enum.
     */
    abstract protected function createUnitEnumClass(): string;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->unit_class = $this->createUnitClass();
        $this->unit_enum_class = $this->createUnitEnumClass();
    }

    /**
     * Test the successful creation of the unit DTO.
     * @return void
     */
    public function testSuccessfulCreation(): void
    {
        $cases = $this->unit_enum_class::cases();
        $unitDto = new $this->unit_class($cases[0]);
        $this->assertInstanceOf($this->unit_class, $unitDto);
    }

    /**
     * @return void
     */
    public function testSuccessfulCreationWithCustomName(): void
    {
        $cases = $this->unit_enum_class::cases();
        /**
         * @var UnitDto $unitDto
         */
        $unitDto = new $this->unit_class($cases[0], 'Custom Name');
        $this->assertInstanceOf($this->unit_class, $unitDto);
        $this->assertEquals('Custom Name', $unitDto->name);
    }
}
