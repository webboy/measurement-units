<?php

namespace Webboy\MeasurementUnits;

use Webboy\MeasurementUnits\Enums\MeasurementEnum;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidMeasurementIdMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidUnitDefinitionsMeasurementException;
use Webboy\MeasurementUnits\Exceptions\MeasurementExceptions\InvalidUnitIdMeasurementException;
use Webboy\MeasurementUnits\Exceptions\UnitExceptions\InvalidUnitIdUnitException;

class EnumeratableMeasurementDto extends MeasurementDto
{
    /**
     * @param MeasurementEnum $measurementEnum
     * @throws InvalidMeasurementIdMeasurementException
     * @throws InvalidUnitDefinitionsMeasurementException
     * @throws InvalidUnitIdMeasurementException
     * @throws InvalidUnitIdUnitException
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
