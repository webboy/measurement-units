<?php

use Webboy\MeasurementUnits\Enums\Units\VolumeUnitEnum;
use Webboy\MeasurementUnits\Measurements\VolumeMeasurementDto;

$volumeMeasurement = new VolumeMeasurementDto();

return [
    $volumeMeasurement->getUnit(VolumeUnitEnum::GALLON->value),
    $volumeMeasurement->getUnit(VolumeUnitEnum::LITRE->value),
];