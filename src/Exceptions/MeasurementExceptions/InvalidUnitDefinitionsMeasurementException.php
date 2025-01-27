<?php

namespace Webboy\MeasurementUnits\Exceptions\MeasurementExceptions;

use Throwable;
use Webboy\MeasurementUnits\Exceptions\MeasurementException;

class InvalidUnitDefinitionsMeasurementException extends MeasurementException
{
    public function __construct($message = null)
    {
        $message = $message ?? "The unit definitions are invalid.";
        parent::__construct($message);
    }
}
