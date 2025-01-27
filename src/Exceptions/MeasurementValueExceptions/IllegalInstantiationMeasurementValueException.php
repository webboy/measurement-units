<?php

namespace Webboy\MeasurementUnits\Exceptions\MeasurementValueExceptions;

use Throwable;
use Webboy\MeasurementUnits\Exceptions\MeasurementValueException;

class IllegalInstantiationMeasurementValueException extends MeasurementValueException
{
    public function __construct(?string $message = null)
    {
        $message = $message ?? 'Illegal instantiation of a measurement value.';

        parent::__construct($message);
    }
}
