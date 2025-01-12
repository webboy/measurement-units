<?php

namespace Webboy\MeasurementUnits\Measurements;

use Webboy\MeasurementUnits\Enums\MeasurementEnum;
use Webboy\MeasurementUnits\Enums\Units\DistanceUnitEnum;
use Webboy\MeasurementUnits\Exceptions\MeasurementException;
use Webboy\MeasurementUnits\MeasurementDto;


class CustomMeasurementDto extends MeasurementDto
{
    /**
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