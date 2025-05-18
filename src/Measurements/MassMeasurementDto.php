<?php

namespace Webboy\MeasurementUnits\Measurements;

use Webboy\MeasurementUnits\EnumeratableMeasurementDto;
use Webboy\MeasurementUnits\Enums\MeasurementEnum;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidMeasurementIdMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidUnitDefinitionsMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidUnitIdMeasurementException;

/**
 * A mass measurement DTO.
 */
class MassMeasurementDto extends EnumeratableMeasurementDto
{
    /**
     * Create a new mass measurement DTO.
     *
     * @throws InvalidMeasurementIdMeasurementException If the measurement ID is invalid.
     * @throws InvalidUnitDefinitionsMeasurementException If the unit definitions are invalid.
     * @throws InvalidUnitIdMeasurementException If the unit ID is invalid.
     */
    public function __construct()
    {
        parent::__construct(MeasurementEnum::MASS);
    }
}
