<?php

namespace Webboy\MeasurementUnits\Measurements;

use Webboy\MeasurementUnits\Exceptions\MeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidMeasurementIdMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidUnitDefinitionsMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidUnitIdMeasurementException;
use Webboy\MeasurementUnits\MeasurementDto;
use Webboy\MeasurementUnits\UnitDto;

/**
 * A custom measurement DTO.
 */
class CustomMeasurementDto extends MeasurementDto
{
    /**
     * Create a new custom measurement DTO.
     *
     * @param integer|string      $id           The ID of the measurement.
     * @param string              $name         The name of the measurement.
     * @param integer|string|null $base_unit_id The ID of the base unit.
     * @param UnitDto[]|null      $units        The units of the measurement.
     * @throws InvalidMeasurementIdMeasurementException
     * @throws InvalidUnitDefinitionsMeasurementException
     * @throws InvalidUnitIdMeasurementException
     */
    public function __construct(
        int | string $id,
        string $name,
        int | string $base_unit_id = null,
        ?array $units = null
    ) {
        parent::__construct(
            id: $id,
            name: $name,
            base_unit_id: $base_unit_id,
            units: $units
        );
    }
}
