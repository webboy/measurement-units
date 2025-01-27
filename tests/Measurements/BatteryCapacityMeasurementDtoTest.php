<?php

namespace Tests\Measurements;

use Tests\Abstract\AbstractMeasurementDtoBase;
use Webboy\MeasurementUnits\Enums\Units\BatteryCapacityUnitEnum;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidUnitIdMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementValueExceptions\IllegalInstantiationMeasurementValueException;
use Webboy\MeasurementUnits\Exceptions\UnitConverterExceptions\InvalidConversionParameterConverterException;
use Webboy\MeasurementUnits\Exceptions\UnitConverterExceptions\InvalidTargetUnitIdUnitConverterException;
use Webboy\MeasurementUnits\Measurements\BatteryCapacityMeasurementDto;
use Webboy\MeasurementUnits\UnitConverter;

class BatteryCapacityMeasurementDtoTest extends AbstractMeasurementDtoBase
{
    protected function createMeasurementDto(): object
    {
        return new BatteryCapacityMeasurementDto();
    }

    protected function createUnitEnumClass(): string
    {
        return BatteryCapacityUnitEnum::class;
    }

    /**
     * @return array<int,array<string,mixed>>
     */
    protected function createConversionTestParameters(): array
    {
        $params =  [
            [
                'value' => $this->measurementDto->createValue(5, BatteryCapacityUnitEnum::KILOWATT_HOUR->value),
                'target_unit_id' => BatteryCapacityUnitEnum::WATT_HOUR->value,
                'expected_value' => 5000,
                'delta' => 0.0001,
            ],
            [
                'value' => $this->measurementDto->createValue(1, BatteryCapacityUnitEnum::KILOWATT_HOUR->value),
                'target_unit_id' => BatteryCapacityUnitEnum::AMPERE_HOUR->value,
                'expected_value' => 83.3333,
                'delta' => 0.0001,
                'args'  => [12],
            ],
        ];

        return array_merge($params, parent::createConversionTestParameters());
    }

    /**
     * @return void
     * @throws IllegalInstantiationMeasurementValueException
     * @throws InvalidConversionParameterConverterException
     * @throws InvalidTargetUnitIdUnitConverterException
     * @throws InvalidUnitIdMeasurementException
     */
    public function testFailConversionInvalidConversionCalculation()
    {
        // Expect an exception of type `InvalidConversionParameterConverterException`.
        $this->expectException(InvalidConversionParameterConverterException::class);

        // Convert the value without the voltage argument.
        UnitConverter::convert(
            $this->measurementDto->createValue(1, BatteryCapacityUnitEnum::KILOWATT_HOUR->value),
            BatteryCapacityUnitEnum::AMPERE_HOUR->value
        );

    }
}
