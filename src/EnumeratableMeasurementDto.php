<?php

namespace Webboy\MeasurementUnits;

use Webboy\MeasurementUnits\MeasurementDto;

class EnumeratableMeasurementDto extends MeasurementDto
{
    public function __construct(object $measurementEnum)
    {
        parent::__construct(
            id: $measurementEnum->value,
            name: $measurementEnum->label(),
            base_unit_id: $measurementEnum->baseUnit()->value,
            units: $measurementEnum->units()
        );
    }
}
