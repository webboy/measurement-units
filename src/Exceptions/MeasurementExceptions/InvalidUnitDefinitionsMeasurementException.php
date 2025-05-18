<?php

namespace Webboy\MeasurementUnits\Exceptions\MeasurementExceptions;

use Throwable;
use Webboy\MeasurementUnits\Exceptions\MeasurementException;

/**
 * Class InvalidUnitDefinitionsMeasurementException
 * Indicates that unit definitions for a measurement are invalid.
 */
class InvalidUnitDefinitionsMeasurementException extends MeasurementException
{
    /**
     * InvalidUnitDefinitionsMeasurementException constructor.
     * @param string|null $message The Exception message to throw.
     */
    public function __construct(?string $message = null)
    {
        $message = $message ?? 'The unit definitions are invalid.';
        parent::__construct($message);
    }
}
