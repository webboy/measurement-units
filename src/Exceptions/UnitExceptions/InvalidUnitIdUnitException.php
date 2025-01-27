<?php

namespace Webboy\MeasurementUnits\Exceptions\UnitExceptions;

use Throwable;
use Webboy\MeasurementUnits\Exceptions\UnitException;

class InvalidUnitIdUnitException extends UnitException
{
    public function __construct(mixed $id, $message = null)
    {
        $message = $message ?? "The unit ID '{$id}' is invalid.";
        parent::__construct($message);
    }
}
