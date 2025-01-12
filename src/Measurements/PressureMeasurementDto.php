<?php

namespace Webboy\MeasurementUnits\Measurements;

use Webboy\MeasurementUnits\Enums\MeasurementEnum;
use Webboy\MeasurementUnits\Enums\Units\DistanceUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\PressureUnitEnum;
use Webboy\MeasurementUnits\Exceptions\MeasurementException;
use Webboy\MeasurementUnits\MeasurementDto;


class PressureMeasurementDto extends MeasurementDto
{
    /**
     * @throws MeasurementException
     */
    public function __construct($name = 'Pressure', int | string $base_unit_id = null, $units = null)
    {
        $validIds = array_map(fn($unit) => $unit->value, MeasurementEnum::cases());

        parent::__construct(
            id: MeasurementEnum::PRESSURE->value,
            name: $name,
            base_unit_id: $base_unit_id ?? PressureUnitEnum::PASCAL->value,
            units: $units,
            validIds: $validIds
        );
    }
}