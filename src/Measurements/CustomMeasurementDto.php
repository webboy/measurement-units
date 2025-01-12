<?php

namespace Webboy\MeasurementUnits\Measurements;

use Webboy\MeasurementUnits\Exceptions\MeasurementException;
use Webboy\MeasurementUnits\MeasurementDto;

/**
 * A custom measurement DTO.
 */
class CustomMeasurementDto extends MeasurementDto
{
    /**
     * Create a new custom measurement DTO.
     *
     * @param int|string $id The ID of the measurement.
     * @param string $name The name of the measurement.
     * @param int|string $base_unit_id The ID of the base unit.
     * @param array $units The units of the measurement.
     * @throws MeasurementException
     */
    public function __construct(
        int | string $id,
        string $name,
        int | string $base_unit_id,
        array $units
    ){
        parent::__construct(
            id: $id,
            name: $name,
            base_unit_id: $base_unit_id,
            units: $units
        );
    }
}