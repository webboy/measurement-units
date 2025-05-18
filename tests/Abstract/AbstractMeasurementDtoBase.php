<?php

namespace Tests\Abstract;

use PHPUnit\Framework\TestCase;
use Webboy\MeasurementUnits\Exceptions\MeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidUnitIdMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementValueExceptions\IllegalInstantiationMeasurementValueException;
use Webboy\MeasurementUnits\Exceptions\UnitConverterExceptions\InvalidConversionParameterConverterException;
use Webboy\MeasurementUnits\Exceptions\UnitConverterExceptions\InvalidTargetUnitIdUnitConverterException;
use Webboy\MeasurementUnits\MeasurementDto;
use Webboy\MeasurementUnits\UnitConverter;

/**
 * Class AbstractMeasurementDtoBase
 * @package Tests\Abstract
 */
abstract class AbstractMeasurementDtoBase extends TestCase
{
    /**
     * @var MeasurementDto The measurement DTO.
     */
    protected MeasurementDto $measurementDto;

    /**
     * @var class-string The class name of the unit enum.
     */
    protected string $unitEnumClass;

    /**
     * @var array<int, array{
     *   value: \Webboy\MeasurementUnits\MeasurementValueDto,
     *   target_unit_id: int|string,
     *   expected_value: int|float,
     *   args?: array<mixed>,
     *   delta?: float
     * }> The conversion test parameters.
     */
    protected array $conversionTestParameters;

    /**
     * Create the measurement DTO.
     *
     * @return MeasurementDto The measurement DTO.
     */
    abstract protected function createMeasurementDto(): MeasurementDto;

    /**
     * Create the unit enum class.
     *
     * @return class-string The class name of the unit enum.
     */
    abstract protected function createUnitEnumClass(): string;

    /**
     * Create the conversion test parameters.
     *
     * @return array<int, array{
     *   value: \Webboy\MeasurementUnits\MeasurementValueDto,
     *   target_unit_id: int|string,
     *   expected_value: int|float,
     *   args?: array<mixed>,
     *   delta?: float
     * }> The conversion test parameters.
     * @throws InvalidUnitIdMeasurementException If an invalid unit ID is used during value creation.
     * @throws IllegalInstantiationMeasurementValueException If there's an issue with value DTO instantiation.
     */
    protected function createConversionTestParameters(): array
    {
        return [
            [
                'value' => $this->measurementDto->createValue(10, $this->measurementDto->getBaseUnit()->id),
                'target_unit_id' => $this->measurementDto->getBaseUnit()->id,
                'expected_value' => 10,
            ]
        ];
    }

    /**
     * @throws IllegalInstantiationMeasurementValueException If there's an issue with value DTO instantiation.
     * @throws InvalidUnitIdMeasurementException If an invalid unit ID is used during value creation.
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->measurementDto = $this->createMeasurementDto();
        $this->unitEnumClass = $this->createUnitEnumClass();
        $this->conversionTestParameters = $this->createConversionTestParameters();
    }

    /**
     * @throws InvalidUnitIdMeasurementException If an invalid unit ID is provided.
     * @return void
     */
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
     * @throws IllegalInstantiationMeasurementValueException If there's an issue with value DTO instantiation.
     * @throws InvalidUnitIdMeasurementException If an invalid unit ID is used during value creation.
     * @return void
     */
    public function testSuccessfulValueCreation(): void
    {
        $value = $this->measurementDto->createValue(10, $this->measurementDto->getBaseUnit()->id);
        $this->assertSame(10, $value->value);

        // To string assertion
        $string = 'Measurement value: ' . $value->value . ' ' . $value->unit->symbol;
        $this->assertSame($string, 'Measurement value: ' . $value);
    }

    /**
     * @throws IllegalInstantiationMeasurementValueException If there's an issue with value DTO instantiation.
     * @throws InvalidUnitIdMeasurementException If an invalid unit ID is used during value creation.
     * @return void
     */
    public function testFailValueCreation(): void
    {
        $this->expectException(InvalidUnitIdMeasurementException::class);
        $value = $this->measurementDto->createValue(10, 'invalid');
    }

    /**
     * @throws IllegalInstantiationMeasurementValueException If there's an issue with value DTO instantiation.
     * @throws InvalidTargetUnitIdUnitConverterException If the target unit ID for conversion is invalid.
     * @throws InvalidUnitIdMeasurementException If an invalid unit ID is used during value creation.
     * @throws InvalidConversionParameterConverterException If conversion parameters are invalid.
     * @return void
     */
    public function testSuccessfulConversion(): void
    {
        foreach ($this->conversionTestParameters as $conversionTestParameter) {
            /**
             * @var array{
             *   value: \Webboy\MeasurementUnits\MeasurementValueDto,
             *   target_unit_id: int|string,
             *   expected_value: int|float,
             *   args?: array<mixed>,
             *   delta?: float
             * } $conversionTestParameter
             */
            // Assert using UnitConverter::convert
            $this->assertEqualsWithDelta(
                $conversionTestParameter['expected_value'],
                UnitConverter::convert(
                    $conversionTestParameter['value'],
                    $conversionTestParameter['target_unit_id'],
                    ...($conversionTestParameter['args'] ?? [])
                )->value,
                $conversionTestParameter['delta'] ?? 0
            );

            // Assert using MeasurementValueDto->to()
            $this->assertEqualsWithDelta(
                $conversionTestParameter['expected_value'],
                $conversionTestParameter['value']->to(
                    $conversionTestParameter['target_unit_id'],
                    ...($conversionTestParameter['args'] ?? [])
                )->value,
                $conversionTestParameter['delta'] ?? 0
            );
        }
    }

    /**
     * @throws IllegalInstantiationMeasurementValueException If there's an issue with value DTO instantiation.
     * @throws InvalidUnitIdMeasurementException If an invalid unit ID is used during value creation.
     * @throws InvalidConversionParameterConverterException If conversion parameters are invalid.
     * @return void
     */
    public function testFailConversion(): void
    {
        $this->expectException(InvalidTargetUnitIdUnitConverterException::class);
        UnitConverter::convert($this->measurementDto->createValue(10, $this->measurementDto->getBaseUnit()->id), 'invalid');
    }
}
