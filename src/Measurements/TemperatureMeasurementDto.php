<?php

namespace Webboy\MeasurementUnits\Measurements;

use Webboy\MeasurementUnits\Enums\MeasurementEnum;
use Webboy\MeasurementUnits\Enums\Units\TemperatureUnitEnum;
use Webboy\MeasurementUnits\Exceptions\MeasurementException;
use Webboy\MeasurementUnits\MeasurementDto;

/**
 * A temperature measurement DTO.
 */
class TemperatureMeasurementDto extends MeasurementDto
{
    /**
     * Create a new temperature measurement DTO.
     *
     * @param string $name The name of the measurement.
     * @param int|string|null $base_unit_id The ID of the base unit.
     * @param null $units The units of the measurement.
     * @throws MeasurementException
     */
    public function __construct($name = 'Temperature', int | string $base_unit_id = null, $units = null)
    {
        $validIds = array_map(fn($unit) => $unit->value, MeasurementEnum::cases());

        parent::__construct(
            id: MeasurementEnum::TEMPERATURE->value,
            name: $name,
            base_unit_id: $base_unit_id ?? TemperatureUnitEnum::KELVIN->value,
            units: $units,
            validIds: $validIds
        );
    }
}