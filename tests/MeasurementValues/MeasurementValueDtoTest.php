<?php

namespace Tests\MeasurementValues;

use PHPUnit\Framework\TestCase;
use Webboy\MeasurementUnits\Enums\Units\DistanceUnitEnum;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidUnitIdMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementValueExceptions\IllegalInstantiationMeasurementValueException;
use Webboy\MeasurementUnits\Exceptions\UnitException;
use Webboy\MeasurementUnits\Measurements\DistanceMeasurementDto;
use Webboy\MeasurementUnits\MeasurementValueDto;
use Webboy\MeasurementUnits\Units\DistanceUnitDto;

/**
 * Class MeasurementValueDtoTest
 * @package Tests\MeasurementValues
 */
class MeasurementValueDtoTest extends TestCase
{
    /**
     * @throws InvalidUnitIdMeasurementException If an invalid unit ID is provided.
     * @return void
     */
    public function testThrowsExceptionWhenInstantiatedOutsideOfMeasurementDto(): void
    {
        // Arrange
        $unit = new DistanceUnitDto(DistanceUnitEnum::METER);
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
