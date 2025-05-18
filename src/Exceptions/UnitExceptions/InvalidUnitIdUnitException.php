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
        $idRepresentation = is_scalar($id) ? (string) $id : gettype($id);
        $message = $message ?? sprintf("The unit ID '%s' is invalid.", $idRepresentation);
        parent::__construct($message);
    }
}
