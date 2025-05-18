<?php

namespace Tests\Measurements;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use Webboy\MeasurementUnits\Exceptions\MeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidMeasurementIdMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidUnitDefinitionsMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidUnitIdMeasurementException;
use Webboy\MeasurementUnits\MeasurementDto;
use Webboy\MeasurementUnits\Measurements\InvalidMeasurementDto;

/**
 * Tests for MeasurementDto and related exceptions/invalid DTOs.
 */
#[CoversClass(MeasurementDto::class)]
#[CoversClass(InvalidMeasurementDto::class)]
#[CoversClass(InvalidMeasurementIdMeasurementException::class)]
#[CoversClass(InvalidUnitIdMeasurementException::class)]
#[CoversClass(InvalidUnitDefinitionsMeasurementException::class)]
class MeasurementDtoTest extends TestCase
{
    /**
     * @return void
     */
    public function testInvalidMeasurementDtoInvalidMeasurementId(): void
    {
        //Expect an exception
        $this->expectException(InvalidMeasurementIdMeasurementException::class);

        //Act
        $dto = new InvalidMeasurementDto();
    }

    /**
     * @throws MeasurementException If there is an issue with measurement definitions.
     * @return void
     */
    public function testInvalidMeasurementDtoInvalidBaseUnitIdMeasurementException(): void
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
     * @throws MeasurementException If there is an issue with measurement definitions.
     * @return void
     */
    public function testInvalidMeasurementDtoInvalidUnitDefinitionsMeasurementException(): void
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
