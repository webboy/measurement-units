<?php

namespace Webboy\MeasurementUnits\Exceptions\UnitConverterExceptions;

use Throwable;
use Webboy\MeasurementUnits\Exceptions\UnitConverterException;
use Webboy\MeasurementUnits\Exceptions\UnitException;

class InvalidTargetUnitIdUnitConverterException extends UnitConverterException
{
    public function __construct(Throwable $previous = null)
    {
        $message = 'The target unit ID is invalid.';
        $code = 500;

        parent::__construct($message, $code, $previous);
    }
}
