<?php

namespace Webboy\MeasurementUnits\Exceptions\MeasurementExceptions;

use Throwable;
use Webboy\MeasurementUnits\Exceptions\MeasurementException;

class InvalidMeasurementIdMeasurementException extends MeasurementException
{
    public function __construct(mixed $id, ?string $message = null)
    {
        $message = $message ?? "The measurement ID '{$id}' is invalid.";
        parent::__construct($message);
    }
}
