<?php

namespace Webboy\MeasurementUnits\Exceptions;

use Exception;
use Throwable;

/**
 * Class UnitConverterException
 * Base exception for unit converter related errors.
 */
abstract class UnitConverterException extends Exception
{
    /**
     * UnitConverterException constructor.
     * @param string         $message  The Exception message to throw.
     * @param integer        $code     The Exception code.
     * @param Throwable|null $previous The previous throwable used for the exception chaining.
     */
    public function __construct(string $message = '', int $code = 500, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
