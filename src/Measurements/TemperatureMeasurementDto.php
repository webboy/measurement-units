<?php

namespace Webboy\MeasurementUnits\Measurements;

use Webboy\MeasurementUnits\EnumeratableMeasurementDto;
use Webboy\MeasurementUnits\Enums\MeasurementEnum;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidMeasurementIdMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidUnitDefinitionsMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidUnitIdMeasurementException;

/**
 * A temperature measurement DTO.
 */
class TemperatureMeasurementDto extends EnumeratableMeasurementDto
{
    /**
     * Create a new temperature measurement DTO.
     *
     * @throws InvalidMeasurementIdMeasurementException If the measurement ID is invalid.
     * @throws InvalidUnitDefinitionsMeasurementException If the unit definitions are invalid.
     * @throws InvalidUnitIdMeasurementException If the unit ID is invalid.
     */
    public function __construct()
    {
        parent::__construct(MeasurementEnum::TEMPERATURE);
    }
}
