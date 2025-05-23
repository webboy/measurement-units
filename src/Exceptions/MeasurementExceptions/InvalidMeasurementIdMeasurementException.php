<?php

namespace Webboy\MeasurementUnits\Exceptions\MeasurementExceptions;

use Throwable;
use Webboy\MeasurementUnits\Exceptions\MeasurementException;

/**
 * Class InvalidMeasurementIdMeasurementException
 * Indicates that a measurement ID is invalid.
 */
class InvalidMeasurementIdMeasurementException extends MeasurementException
{
    /**
     * InvalidMeasurementIdMeasurementException constructor.
     * @param mixed       $id      The invalid measurement ID.
     * @param string|null $message The Exception message to throw.
     */
    public function __construct(mixed $id, ?string $message = null)
    {
        $idRepresentation = is_scalar($id) ? (string) $id : gettype($id);
        $message = $message ?? "The measurement ID '{$idRepresentation}' is invalid.";
        parent::__construct($message);
    }
}
