<?php

namespace Tests\Measurements;

use PHPUnit\Framework\TestCase;
use Webboy\MeasurementUnits\Exceptions\MeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidMeasurementIdMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidUnitDefinitionsMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidUnitIdMeasurementException;
use Webboy\MeasurementUnits\Exceptions\UnitException;
use Webboy\MeasurementUnits\Exceptions\UnitExceptions\InvalidUnitIdUnitException;
use Webboy\MeasurementUnits\Measurements\CustomMeasurementDto;
use Webboy\MeasurementUnits\Units\CustomUnitDto;

class CustomMeasurementTest extends TestCase
{
    /**
     * @throws UnitException
     * @throws MeasurementException
     */
    public function testCustomMeasurement(): void
    {
        $customDistanceMeasurement = new CustomMeasurementDto(
            id: 'fubar',
            name: 'Fubar Measurement',
            base_unit_id: 'fu',
            units: [
                new CustomUnitDto(
                    id: 'fu',
                    name: 'Fubar',
                    symbol: 'fu',
                    toBase: fn ($x) => $x,
                    fromBase: fn ($x) => $x,
                ),
                new CustomUnitDto(
                    id: 'zig',
                    name: 'Zigzag',
                    symbol: 'zig',
                    toBase: fn ($x) => $x * 0.75,
                    fromBase: fn ($x) => $x / 0.75,
                )
            ]
        );

        $this->assertEquals('Fubar Measurement', $customDistanceMeasurement->name);
    }

    /**
     * @throws InvalidUnitDefinitionsMeasurementException
     * @throws InvalidUnitIdMeasurementException
     * @throws InvalidMeasurementIdMeasurementException
     * @throws InvalidUnitIdUnitException
     */
    public function testSettingBaseUnitIdFromUnitArray(): void
    {
        $customDistanceMeasurement = new CustomMeasurementDto(
            id: 'fubar',
            name: 'Fubar Measurement',
            units: [
                new CustomUnitDto(
                    id: 'fu',
                    name: 'Fubar',
                    symbol: 'fu',
                    toBase: fn ($x) => $x,
                    fromBase: fn ($x) => $x,
                    isBase: true,
                ),
                new CustomUnitDto(
                    id: 'zig',
                    name: 'Zigzag',
                    symbol: 'zig',
                    toBase: fn ($x) => $x * 0.75,
                    fromBase: fn ($x) => $x / 0.75,
                )
            ]
        );

        $this->assertEquals('fu', $customDistanceMeasurement->getBaseUnit()->id);
    }
}
