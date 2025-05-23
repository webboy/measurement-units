<?php

namespace Tests\Measurements;

use PHPUnit\Framework\Attributes\CoversNothing;
use Tests\Abstract\AbstractMeasurementDtoBase;
use Webboy\MeasurementUnits\Enums\Units\DistanceUnitEnum;
use Webboy\MeasurementUnits\Measurements\DistanceMeasurementDto;

/**
 * @internal
 */
#[CoversNothing]
class DistanceMeasurementDtoTest extends AbstractMeasurementDtoBase
{
    /**
     * @return DistanceMeasurementDto
     */
    protected function createMeasurementDto(): DistanceMeasurementDto
    {
        return new DistanceMeasurementDto();
    }

    /**
     * @return string
     */
    protected function createUnitEnumClass(): string
    {
        return DistanceUnitEnum::class;
    }

    /**
     * @return array<int,array<string,mixed>>
     */
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
