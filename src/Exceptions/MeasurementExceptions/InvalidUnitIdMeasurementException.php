<?php

namespace Webboy\MeasurementUnits\Exceptions\MeasurementExceptions;

use Throwable;
use Webboy\MeasurementUnits\Exceptions\MeasurementException;

class InvalidUnitIdMeasurementException extends MeasurementException
{
    public function __construct(mixed $id, ?string $message = null)
    {
        $message = $message ?? "The unit ID '{$id}' is invalid.";
        parent::__construct($message);
    }
}
