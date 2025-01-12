<?php

namespace Webboy\MeasurementUnits\Enums\Units;

enum PressureUnitEnum: string
{
    // SI Units
    case PASCAL = 'Pa';

    // Metric Units
    case BAR = 'bar';

    // Imperial/US Customary Units
    case PSI = 'psi';
    case PSF = 'psf';
}
