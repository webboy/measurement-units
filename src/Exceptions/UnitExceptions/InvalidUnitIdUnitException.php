<?php

namespace Webboy\MeasurementUnits\Exceptions\UnitExceptions;

use Throwable;
use Webboy\MeasurementUnits\Exceptions\UnitException;

/**
 * Class InvalidUnitIdUnitException
 * Indicates that a unit ID is invalid.
 */
class InvalidUnitIdUnitException extends UnitException
{
    /**
     * InvalidUnitIdUnitException constructor.
     * @param mixed       $id      The invalid unit ID.
     * @param string|null $message The Exception message to throw.
     */
    public function __construct(mixed $id, ?string $message = null)
    {
        $message = $message ?? "The unit ID '{$id}' is invalid.";
        parent::__construct($message);
    }
}
