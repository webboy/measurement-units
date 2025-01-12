<?php

namespace Webboy\MeasurementUnits\Measurements;

use Webboy\MeasurementUnits\Enums\MeasurementEnum;
use Webboy\MeasurementUnits\Enums\Units\VolumeUnitEnum;
use Webboy\MeasurementUnits\Exceptions\MeasurementException;
use Webboy\MeasurementUnits\MeasurementDto;

/**
 * A volume measurement DTO.
 */
class VolumeMeasurementDto extends MeasurementDto
{
    /**
     * Create a new volume measurement DTO.
     *
     * @param string $name The name of the measurement.
     * @param int|string|null $base_unit_id The ID of the base unit.
     * @param null $units The units of the measurement.
     * @throws MeasurementException
     */
    public function __construct(string $name = 'Volume', int | string $base_unit_id = null, $units = null)
    {
        $validIds = array_map(fn($unit) => $unit->value, MeasurementEnum::cases());

        parent::__construct(
            id: MeasurementEnum::VOLUME->value,
            name: $name,
            base_unit_id: $base_unit_id,
            units: $units,
            validIds: $validIds
        );

        // If the base unit is not set, set it to the default base unit.
        if (empty($this->base_unit_id)) {
            $this->setBaseUnit(VolumeUnitEnum::LITRE->value);
        }
    }
}