<?php

namespace Measurements;

use PHPUnit\Framework\TestCase;
use Webboy\MeasurementUnits\Exceptions\MeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidBaseUnitIdMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidMeasurementIdMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidUnitDefinitionsMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidUnitIdMeasurementException;
use Webboy\MeasurementUnits\Measurements\InvalidMeasurementDto;

class MeasurementDtoTest extends TestCase
{
    public function testInvalidMeasurementDtoInvalidMeasurementId()
    {
        //Expect an exception
        $this->expectException(InvalidMeasurementIdMeasurementException::class);

        //Act
        $dto = new InvalidMeasurementDto();
    }

    /**
     * @throws MeasurementException
     */
    public function testInvalidMeasurementDtoInvalidBaseUnitIdMeasurementException()
    {
        //Expect an exception
        $this->expectException(InvalidUnitIdMeasurementException::class);

        //Act
        $dto = new InvalidMeasurementDto(
            id: 'valid',
            name: 'Valid Measurement',
            base_unit_id: 'valid',
            units: [],
            validIds: ['valid'],
        );
    }

    /**
     * @throws MeasurementException
     */
    public function testInvalidMeasurementDtoInvalidUnitDefinitionsMeasurementException()
    {
        //Expect an exception
        $this->expectException(InvalidUnitDefinitionsMeasurementException::class);

        //Act
        $dto = new InvalidMeasurementDto(
            id: 'valid',
            name: 'Valid Measurement',
            validIds: ['valid'],
        );
    }
}