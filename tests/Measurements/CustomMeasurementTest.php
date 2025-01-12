<?php

namespace Measurements;

use PHPUnit\Framework\TestCase;
use Webboy\MeasurementUnits\Exceptions\MeasurementException;
use Webboy\MeasurementUnits\Exceptions\UnitException;
use Webboy\MeasurementUnits\Measurements\CustomMeasurementDto;
use Webboy\MeasurementUnits\Units\CustomUnitDto;

class CustomMeasurementTest extends TestCase
{
    /**
     * @throws UnitException
     * @throws MeasurementException
     */
    public function testCustomMeasurement()
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
                    toBase: fn($x) => $x,
                    fromBase: fn($x) => $x,
                ),
                new CustomUnitDto(
                    id: 'zig',
                    name: 'Zigzag',
                    symbol: 'zig',
                    toBase: fn($x) => $x * 0.75,
                    fromBase: fn($x) => $x / 0.75,
                )
            ]
        );

        $this->assertEquals('Fubar Measurement', $customDistanceMeasurement->name);
    }
}