<?php

namespace Webboy\MeasurementUnits\Measurements;

use Webboy\MeasurementUnits\Enums\DistanceUnitEnum;
use Webboy\MeasurementUnits\Enums\MeasurementEnum;
use Webboy\MeasurementUnits\Enums\WeightUnitEnum;
use Webboy\MeasurementUnits\Exceptions\MeasurementException;
use Webboy\MeasurementUnits\MeasurementDto;


class WeightMeasurementDto extends MeasurementDto
{
    /**
     * @throws MeasurementException
     */
    public function __construct($name = 'Distance', int | string $base_unit_id = null, $units = null)
    {
        $this->unit_enum_class = WeightUnitEnum::class;

        parent::__construct(
            id: MeasurementEnum::WEIGHT->value,
            name: $name,
            base_unit_id: $base_unit_id ?? WeightUnitEnum::KILOGRAM->value,
            units: $units
        );
    }
}