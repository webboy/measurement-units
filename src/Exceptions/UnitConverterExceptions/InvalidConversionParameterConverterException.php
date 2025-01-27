<?php

namespace Webboy\MeasurementUnits\Exceptions\UnitConverterExceptions;

use Throwable;
use Webboy\MeasurementUnits\Exceptions\UnitConverterException;
use Webboy\MeasurementUnits\Exceptions\UnitException;

class InvalidConversionParameterConverterException extends UnitConverterException
{
    public function __construct(Throwable $previous = null)
    {
        $message = 'Invalid conversion parameter.';
        $code = 500;

        parent::__construct($message, $code, $previous);
    }
}
