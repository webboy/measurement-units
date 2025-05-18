<?php

namespace Webboy\MeasurementUnits\Exceptions;

use Exception;
use Throwable;

/**
 * Class UnitException
 * Base exception for unit related errors.
 */
abstract class UnitException extends Exception
{
    /**
     * UnitException constructor.
     * @param string         $message  The Exception message to throw.
     * @param integer        $code     The Exception code.
     * @param Throwable|null $previous The previous throwable used for the exception chaining.
     */
    public function __construct(string $message = '', int $code = 500, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
