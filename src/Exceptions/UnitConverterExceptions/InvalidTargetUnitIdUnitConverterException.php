<?php

namespace Webboy\MeasurementUnits\Exceptions\UnitConverterExceptions;

use Throwable;
use Webboy\MeasurementUnits\Exceptions\UnitConverterException;
use Webboy\MeasurementUnits\Exceptions\UnitException;

/**
 * Class InvalidTargetUnitIdUnitConverterException
 * Indicates that the target unit ID for a conversion is invalid.
 */
class InvalidTargetUnitIdUnitConverterException extends UnitConverterException
{
    /**
     * InvalidTargetUnitIdUnitConverterException constructor.
     * @param Throwable|null $previous The previous throwable used for the exception chaining.
     */
    public function __construct(Throwable $previous = null)
    {
        $message = 'The target unit ID is invalid.';
        $code = 500;

        parent::__construct($message, $code, $previous);
    }
}
