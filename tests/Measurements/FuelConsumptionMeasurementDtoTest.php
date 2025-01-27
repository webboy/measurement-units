<?php

namespace Measurements;

use Tests\Abstract\AbstractMeasurementDtoBase;
use Webboy\MeasurementUnits\Enums\Units\FuelConsumptionUnitEnum;
use Webboy\MeasurementUnits\Measurements\FuelConsumptionMeasurementDto;

class FuelConsumptionMeasurementDtoTest extends AbstractMeasurementDtoBase
{
    protected function createMeasurementDto(): object
    {
        return new FuelConsumptionMeasurementDto();
    }

    protected function createUnitEnumClass(): string
    {
        return FuelConsumptionUnitEnum::class;
    }

    /**
     * @return array<int,array<string,mixed>>
     */
    protected function createConversionTestParameters(): array
    {
        $params =  [
            [
                'value' => $this->measurementDto->createValue(7, FuelConsumptionUnitEnum::LITERS_PER_100KM->value),
                'target_unit_id' => FuelConsumptionUnitEnum::MILES_PER_GALLON_US->value,
                'expected_value' => 33.6020,
                'delta' => 0.0001
            ],
            [
                'value' => $this->measurementDto->createValue(33.6020, FuelConsumptionUnitEnum::MILES_PER_GALLON_US->value),
                'target_unit_id' => FuelConsumptionUnitEnum::LITERS_PER_100KM->value,
                'expected_value' => 7,
                'delta' => 0.0001
            ],
            [
                'value' => $this->measurementDto->createValue(30, FuelConsumptionUnitEnum::MILES_PER_GALLON_US->value),
                'target_unit_id' => FuelConsumptionUnitEnum::MILES_PER_GALLON_UK->value,
                'expected_value' => 36.028,
                'delta' => 0.001
            ],
            [
                'value' => $this->measurementDto->createValue(36.028, FuelConsumptionUnitEnum::MILES_PER_GALLON_UK->value),
                'target_unit_id' => FuelConsumptionUnitEnum::MILES_PER_GALLON_US->value,
                'expected_value' => 30,
                'delta' => 0.001
            ]
        ];

        return array_merge($params, parent::createConversionTestParameters());
    }
}
