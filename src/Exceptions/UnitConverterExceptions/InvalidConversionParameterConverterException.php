<?php

namespace Webboy\MeasurementUnits\Exceptions\UnitConverterExceptions;

use Throwable;
use Webboy\MeasurementUnits\Exceptions\UnitConverterException;
use Webboy\MeasurementUnits\Exceptions\UnitException;

/**
 * Class InvalidConversionParameterConverterException
 * Indicates an invalid parameter was provided for a unit conversion.
 */
class InvalidConversionParameterConverterException extends UnitConverterException
{
    /**
     * InvalidConversionParameterConverterException constructor.
     * @param Throwable|null $previous The previous throwable used for the exception chaining.
     */
    public function __construct(Throwable $previous = null)
    {
        $message = 'Invalid conversion parameter.';
        $code = 500;

        parent::__construct($message, $code, $previous);
    }
}
