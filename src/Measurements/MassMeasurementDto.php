<?php

namespace Webboy\MeasurementUnits\Measurements;

use Webboy\MeasurementUnits\Enums\MeasurementEnum;
use Webboy\MeasurementUnits\Enums\Units\MassUnitEnum;
use Webboy\MeasurementUnits\Exceptions\MeasurementException;
use Webboy\MeasurementUnits\MeasurementDto;


/**
 * A weight measurement DTO.
 */
class MassMeasurementDto extends MeasurementDto
{
    /**
     * Create a new weight measurement DTO.
     *
     * @param string $name The name of the measurement.
     * @param int|string|null $base_unit_id The ID of the base unit.
     * @param null $units The units of the measurement.
     * @throws MeasurementException
     */
    public function __construct($name = 'Mass', int | string $base_unit_id = null, $units = null)
    {
        $validIds = array_map(fn($unit) => $unit->value, MeasurementEnum::cases());

        parent::__construct(
            id: MeasurementEnum::WEIGHT->value,
            name: $name,
            base_unit_id: $base_unit_id,
            units: $units,
            validIds: $validIds
        );

        // If the base unit is not set, set it to the default base unit.
        if (empty($this->base_unit_id)) {
            $this->setBaseUnit(MassUnitEnum::KILOGRAM->value);
        }
    }
}