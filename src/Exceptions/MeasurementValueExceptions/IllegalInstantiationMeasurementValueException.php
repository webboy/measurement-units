<?php

namespace Webboy\MeasurementUnits\Exceptions\MeasurementValueExceptions;

use Throwable;
use Webboy\MeasurementUnits\Exceptions\MeasurementValueException;

/**
 * Class IllegalInstantiationMeasurementValueException
 * Indicates an illegal instantiation of a measurement value.
 */
class IllegalInstantiationMeasurementValueException extends MeasurementValueException
{
    /**
     * IllegalInstantiationMeasurementValueException constructor.
     * @param string|null $message The Exception message to throw.
     */
    public function __construct(?string $message = null)
    {
        $message = $message ?? 'Illegal instantiation of a measurement value.';

        parent::__construct($message);
    }
}
