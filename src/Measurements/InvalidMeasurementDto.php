<?php

namespace Webboy\MeasurementUnits\Measurements;

use Webboy\MeasurementUnits\Exceptions\MeasurementException;
use Webboy\MeasurementUnits\MeasurementDto;
use Webboy\MeasurementUnits\UnitDto;

/**
 * A custom measurement DTO. This class is used to test the MeasurementDto class. Do not use this class in production.
 */
class InvalidMeasurementDto extends MeasurementDto
{
    /**
     * Create a new custom measurement DTO.
     *
     * @param int|string $id The ID of the measurement.
     * @param string $name The name of the measurement.
     * @param int|string $base_unit_id The ID of the base unit.
     * @param array<int,UnitDto>|null $units The units of the measurement.
     * @param array<int|string> $validIds
     * @throws MeasurementException
     */
    public function __construct(
        int | string $id = 'invalid',
        string $name = 'Invalid Measurement',
        int | string $base_unit_id = 'invalid',
        array $units = null,
        array $validIds = []
    ) {
        parent::__construct(
            id: $id,
            name: $name,
            base_unit_id: $base_unit_id,
            units: $units,
            validIds: $validIds
        );
    }
}
