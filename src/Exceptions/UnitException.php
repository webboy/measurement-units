<?php

namespace Webboy\MeasurementUnits\Exceptions;

use Exception;
use Throwable;

abstract class UnitException extends Exception
{
    public function __construct(string $message = "", int $code = 500, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}