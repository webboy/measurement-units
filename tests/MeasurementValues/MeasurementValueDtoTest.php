<?php

namespace MeasurementValues;

use PHPUnit\Framework\TestCase;
use Webboy\MeasurementUnits\Enums\Units\DistanceUnitEnum;
use Webboy\MeasurementUnits\Exceptions\MeasurementValueExceptions\IllegalInstantiationMeasurementValueException;
use Webboy\MeasurementUnits\Exceptions\UnitException;
use Webboy\MeasurementUnits\Measurements\DistanceMeasurementDto;
use Webboy\MeasurementUnits\MeasurementValueDto;
use Webboy\MeasurementUnits\Units\DistanceUnitDto;

class MeasurementValueDtoTest extends TestCase
{
    /**
     * @throws UnitException
     */
    public function testThrowsExceptionWhenInstantiatedOutsideOfMeasurementDto(): void
    {
        // Arrange
        $unit = new DistanceUnitDto(DistanceUnitEnum::METER->value, 'm', 'meter',  fn($x) => $x, fn($x) => $x);
        $measurement = new DistanceMeasurementDto();

        $this->expectException(IllegalInstantiationMeasurementValueException::class);
        MeasurementValueDto::createFromFactory(
            10,
            $unit,
            $measurement,
            $this::class
        );
    }
}