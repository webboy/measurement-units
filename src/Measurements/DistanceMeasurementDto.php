<?php

namespace Webboy\MeasurementUnits\Measurements;

use Webboy\MeasurementUnits\Enums\DistanceUnitEnum;
use Webboy\MeasurementUnits\Enums\MeasurementEnum;
use Webboy\MeasurementUnits\Exceptions\MeasurementException;
use Webboy\MeasurementUnits\MeasurementDto;


class DistanceMeasurementDto extends MeasurementDto
{
    /**
     * @throws MeasurementException
     */
    public function __construct($name = 'Distance', int | string $base_unit_id = null, $units = null)
    {
        $this->unit_enum_class = DistanceUnitEnum::class;

        parent::__construct(
            id: MeasurementEnum::DISTANCE->value,
            name: $name,
            base_unit_id: $base_unit_id ?? DistanceUnitEnum::METER->value,
            units: $units
        );
    }
}