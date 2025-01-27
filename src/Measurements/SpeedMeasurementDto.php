<?php

namespace Webboy\MeasurementUnits\Measurements;

use Webboy\MeasurementUnits\EnumeratableMeasurementDto;
use Webboy\MeasurementUnits\Enums\MeasurementEnum;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidMeasurementIdMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidUnitDefinitionsMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidUnitIdMeasurementException;

/**
 * A speed measurement DTO.
 */
class SpeedMeasurementDto extends EnumeratableMeasurementDto
{
    /**
     * Create a new speed measurement DTO.
     *
     * @throws InvalidMeasurementIdMeasurementException
     * @throws InvalidUnitDefinitionsMeasurementException
     * @throws InvalidUnitIdMeasurementException
     */
    public function __construct()
    {
        parent::__construct(MeasurementEnum::SPEED);
    }
}
