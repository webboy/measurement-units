<?php

namespace Tests\Measurements;

use Tests\Abstract\AbstractMeasurementDtoBase;
use Webboy\MeasurementUnits\Enums\Units\DistanceUnitEnum;
use Webboy\MeasurementUnits\Measurements\DistanceMeasurementDto;

class DistanceMeasurementDtoTest extends AbstractMeasurementDtoBase
{
    protected function createMeasurementDto(): object
    {
        return new DistanceMeasurementDto();
    }

    protected function createUnitEnumClass(): string
    {
        return DistanceUnitEnum::class;
    }

    protected function createConversionTestParameters(): array
    {
        $params =  [
            [
                'value' => $this->measurementDto->createValue(100, DistanceUnitEnum::KILOMETER->value),
                'target_unit_id' => DistanceUnitEnum::METER->value,
                'expected_value' => 100000
            ]
        ];

        return array_merge($params, parent::createConversionTestParameters());
    }
}
