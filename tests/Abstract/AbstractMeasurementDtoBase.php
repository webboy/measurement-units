<?php

namespace Tests\Abstract;

use PHPUnit\Framework\TestCase;
use Webboy\MeasurementUnits\Exceptions\MeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidUnitIdMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementValueExceptions\IllegalInstantiationMeasurementValueException;
use Webboy\MeasurementUnits\Exceptions\UnitConverterExceptions\InvalidTargetUnitIdUnitConverterException;
use Webboy\MeasurementUnits\UnitConverter;

abstract class AbstractMeasurementDtoBase extends TestCase
{
    /**
     * @var object The measurement DTO.
     */
    protected object $measurementDto;

    /**
     * @var class-string The class name of the unit enum.
     */
    protected string $unitEnumClass;

    /**
     * @var array The conversion test parameters.
     */
    protected array $conversionTestParameters;

    /**
     * Create the measurement DTO.
     *
     * @return object The measurement DTO.
     */
    abstract protected function createMeasurementDto(): object;

    /**
     * Create the unit enum class.
     *
     * @return class-string The class name of the unit enum.
     */
    abstract protected function createUnitEnumClass(): string;

    /**
     * Create the conversion test parameters.
     *
     * @return array The conversion test parameters.
     */
    protected function createConversionTestParameters(): array
    {
        return [
            [
                'value' => $this->measurementDto->createValue(10, $this->measurementDto->getBaseUnit()->id),
                'target_unit_id' => $this->measurementDto->getBaseUnit()->id,
                'expected_value' => 10
            ]
        ];
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->measurementDto = $this->createMeasurementDto();
        $this->unitEnumClass = $this->createUnitEnumClass();
        $this->conversionTestParameters = $this->createConversionTestParameters();

    }

    public function testThrowsExceptionForInvalidId(): void
    {
        $this->expectException(MeasurementException::class);
        new ($this->measurementDto::class)(base_unit_id: 'invalid');
    }

    public function testSuccessfulDefaultConstruction(): void
    {
        $validBaseUnitId = $this->measurementDto->getBaseUnit()->id;

        $this->assertSame($this->measurementDto->id, $this->measurementDto->id);
        $this->assertSame($validBaseUnitId, $this->measurementDto->getBaseUnit()->id);

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
        $value = $this->measurementDto->createValue(10, $this->measurementDto->getBaseUnit()->id);
        $this->assertSame(10, $value->value);

        // To string assertion
        $string = "Measurement value: " . $value->value . " " . $value->unit->symbol;
        $this->assertSame($string, "Measurement value: " . $value);
    }

    /**
     * @throws IllegalInstantiationMeasurementValueException
     * @throws InvalidUnitIdMeasurementException
     */
    public function testFailValueCreation(): void
    {
        $this->expectException(InvalidUnitIdMeasurementException::class);
        $value = $this->measurementDto->createValue(10, 'invalid');
    }

    /**
     * @throws IllegalInstantiationMeasurementValueException
     * @throws InvalidTargetUnitIdUnitConverterException
     * @throws InvalidUnitIdMeasurementException
     */
    public function testSuccessfulConversion(): void
    {
        foreach ($this->conversionTestParameters as $conversionTestParameter) {
            // Assert using UnitConverter::convert
            $this->assertSame(
                $conversionTestParameter['expected_value'],
                UnitConverter::convert($conversionTestParameter['value'], $conversionTestParameter['target_unit_id'])->value
            );

            // Assert using MeasurementValueDto->to()
            $this->assertSame(
                $conversionTestParameter['expected_value'],
                $conversionTestParameter['value']->to($conversionTestParameter['target_unit_id'])->value
            );
        }
    }

    /**
     * @throws IllegalInstantiationMeasurementValueException
     * @throws InvalidUnitIdMeasurementException
     */
    public function testFailConversion(): void
    {
        $this->expectException(InvalidTargetUnitIdUnitConverterException::class);
        UnitConverter::convert($this->measurementDto->createValue(10, $this->measurementDto->getBaseUnit()->id), 'invalid');
    }
}