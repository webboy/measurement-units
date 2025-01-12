<?php

namespace Webboy\MeasurementUnits\Measurements;

use Webboy\MeasurementUnits\Enums\MeasurementEnum;
use Webboy\MeasurementUnits\Enums\Units\WeightUnitEnum;
use Webboy\MeasurementUnits\Exceptions\MeasurementException;
use Webboy\MeasurementUnits\MeasurementDto;


/**
 * A weight measurement DTO.
 */
class WeightMeasurementDto extends MeasurementDto
{
    /**
     * Create a new weight measurement DTO.
     *
     * @param string $name The name of the measurement.
     * @param int|string|null $base_unit_id The ID of the base unit.
     * @param null $units The units of the measurement.
     * @throws MeasurementException
     */
    public function __construct($name = 'Weight', int | string $base_unit_id = null, $units = null)
    {
        $validIds = array_map(fn($unit) => $unit->value, MeasurementEnum::cases());

        parent::__construct(
            id: MeasurementEnum::WEIGHT->value,
            name: $name,
            base_unit_id: $base_unit_id ?? WeightUnitEnum::KILOGRAM->value,
            units: $units,
            validIds: $validIds
        );
    }
}