<?php

namespace Webboy\MeasurementUnits\Measurements;

use Webboy\MeasurementUnits\EnumeratableMeasurementDto;
use Webboy\MeasurementUnits\Enums\MeasurementEnum;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidMeasurementIdMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidUnitDefinitionsMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidUnitIdMeasurementException;

/**
 * A distance measurement DTO.
 */
class DistanceMeasurementDto extends EnumeratableMeasurementDto
{
    /**
     * Create a new distance measurement DTO.
     *
     * @throws InvalidMeasurementIdMeasurementException
     * @throws InvalidUnitDefinitionsMeasurementException
     * @throws InvalidUnitIdMeasurementException
     */
    public function __construct()
    {
        parent::__construct(MeasurementEnum::DISTANCE);
    }
}