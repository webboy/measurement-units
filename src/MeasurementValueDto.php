<?php

namespace Webboy\MeasurementUnits;

abstract class MeasurementValueDto
{
    public mixed $value;

    public UnitDto $unit;

    public MeasurementDto $measurement;

    public function __construct(mixed $value, UnitDto $unit, MeasurementDto $measurement)
    {
        $this->value = $value;
        $this->unit = $unit;
        $this->measurement = $measurement;
    }
}