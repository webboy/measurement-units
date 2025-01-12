<?php

namespace Abstract;

use PHPUnit\Framework\TestCase;
use Webboy\MeasurementUnits\Exceptions\MeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidUnitIdMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementValueExceptions\IllegalInstantiationMeasurementValueException;

abstract class AbstractMeasurementDtoBase extends TestCase
{
    protected object $measurementDto;

    /**
     * @var class-string The class name of the unit enum.
     */
    protected string $unitEnumClass;

    abstract protected function createMeasurementDto(): object;

    abstract protected function createUnitEnumClass(): string;

    protected function setUp(): void
    {
        parent::setUp();
        $this->measurementDto = $this->createMeasurementDto();
        $this->unitEnumClass = $this->createUnitEnumClass();
    }

    public function testThrowsExceptionForInvalidId(): void
    {
        $this->expectException(MeasurementException::class);
        new ($this->measurementDto::class)(base_unit_id: 'invalid');
    }

    public function testSuccessfulDefaultConstruction(): void
    {
        $validBaseUnitId = $this->measurementDto->base_unit_id;

        $this->assertSame($this->measurementDto->id, $this->measurementDto->id);
        $this->assertSame($validBaseUnitId, $this->measurementDto->base_unit_id);

        foreach ($this->unitEnumClass::cases() as $case) {
            $this->assertSame($case->value, $this->measurementDto->getUnit($case->value)->id);
        }
    }

    /**
     * @throws IllegalInstantiationMeasurementValueException
     * @throws InvalidUnitIdMeasurementException
     */
    public function testSuccessfulValueCreation(): void
    {
        $value = $this->measurementDto->createValue(10, $this->measurementDto->base_unit_id);
        $this->assertSame(10, $value->value);
    }
}