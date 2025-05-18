<?php

namespace Webboy\MeasurementUnits;

use Webboy\MeasurementUnits\Enums\MeasurementEnum;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidMeasurementIdMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidUnitDefinitionsMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidUnitIdMeasurementException;
use Webboy\MeasurementUnits\Exceptions\UnitExceptions\InvalidUnitIdUnitException;

/**
 * @throws InvalidMeasurementIdMeasurementException
 * @throws InvalidUnitDefinitionsMeasurementException
 * @throws InvalidUnitIdMeasurementException
 * @throws InvalidUnitIdUnitException
 */
class EnumeratableMeasurementDto extends MeasurementDto
{
    /**
     * @param MeasurementEnum $measurementEnum The measurement enum.
     * @throws InvalidMeasurementIdMeasurementException If the measurement ID is invalid.
     * @throws InvalidUnitDefinitionsMeasurementException If the unit definitions are invalid.
     * @throws InvalidUnitIdMeasurementException If the unit ID is invalid.
     * @throws InvalidUnitIdUnitException If the unit ID from the unit exception is invalid.
     */
    public function __construct(MeasurementEnum $measurementEnum)
    {
        parent::__construct(
            id: $measurementEnum->value(),
            name: $measurementEnum->label(),
            base_unit_id: $measurementEnum->baseUnit()->value(),
            units: $measurementEnum->units()
        );
    }
}
