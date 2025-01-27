<?php

namespace Webboy\MeasurementUnits\Enums;

use Webboy\MeasurementUnits\Enums\Units\AreaUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\BatteryCapacityUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\DistanceUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\FuelConsumptionUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\MassUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\PowerUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\PressureUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\SpeedUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\TemperatureUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\TorqueUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\VoltageUnitEnum;
use Webboy\MeasurementUnits\Enums\Units\VolumeUnitEnum;
use Webboy\MeasurementUnits\Exceptions\UnitExceptions\InvalidUnitIdUnitException;
use Webboy\MeasurementUnits\Units\AreaUnitDto;
use Webboy\MeasurementUnits\Units\BatteryCapacityUnitDto;
use Webboy\MeasurementUnits\Units\DistanceUnitDto;
use Webboy\MeasurementUnits\Units\FuelConsumptionUnitDto;
use Webboy\MeasurementUnits\Units\MassUnitDto;
use Webboy\MeasurementUnits\Units\PowerUnitDto;
use Webboy\MeasurementUnits\Units\PressureUnitDto;
use Webboy\MeasurementUnits\Units\SpeedUnitDto;
use Webboy\MeasurementUnits\Units\TemperatureUnitDto;
use Webboy\MeasurementUnits\Units\TorqueUnitDto;
use Webboy\MeasurementUnits\Units\VoltageUnitDto;
use Webboy\MeasurementUnits\Units\VolumeUnitDto;

enum MeasurementEnum: string
{
    case DISTANCE = 'distance';
    case MASS = 'mass';
    case VOLUME = 'volume';
    case TEMPERATURE = 'temperature';
    case SPEED = 'speed';
    case PRESSURE = 'pressure';
    case AREA = 'area';
    case TORQUE = 'torque';
    case POWER = 'power';
    case FUEL_CONSUMPTION = 'fuel_consumption';
    case BATTERY_CAPACITY = 'battery_capacity';
    case VOLTAGE = 'voltage';


    // Labels
    public function label(): string
    {
        return match ($this) {
            self::DISTANCE => 'Distance',
            self::MASS => 'Mass',
            self::VOLUME => 'Volume',
            self::TEMPERATURE => 'Temperature',
            self::SPEED => 'Speed',
            self::PRESSURE => 'Pressure',
            self::AREA => 'Area',
            self::TORQUE => 'Torque',
            self::POWER => 'Power',
            self::FUEL_CONSUMPTION => 'Fuel Consumption',
            self::BATTERY_CAPACITY =>  'Battery Capacity',
            self::VOLTAGE => 'Voltage',
        };
    }

    // Base Unit Ids
    public function baseUnit(): object
    {
        return match ($this) {
            self::DISTANCE => DistanceUnitEnum::METER,
            self::MASS => MassUnitEnum::KILOGRAM,
            self::VOLUME => VolumeUnitEnum::LITRE,
            self::TEMPERATURE => TemperatureUnitEnum::KELVIN,
            self::SPEED => SpeedUnitEnum::METER_PER_SECOND,
            self::PRESSURE => PressureUnitEnum::PASCAL,
            self::AREA => AreaUnitEnum::SQUARE_METER,
            self::TORQUE => TorqueUnitEnum::NEWTON_METER,
            self::POWER => PowerUnitEnum::WATT,
            self::FUEL_CONSUMPTION => FuelConsumptionUnitEnum::LITERS_PER_100KM,
            self::BATTERY_CAPACITY => BatteryCapacityUnitEnum::KILOWATT_HOUR,
            self::VOLTAGE => VoltageUnitEnum::VOLT,
        };
    }

    // Units

    public function units(): array
    {
        return match ($this) {
            self::DISTANCE => array_map(
                /**
                 * @throws InvalidUnitIdUnitException
                 */
                function (DistanceUnitEnum $unit) {
                    return new DistanceUnitDto($unit);
                },
                DistanceUnitEnum::cases()
            ),
            self::MASS => array_map(
                /**
                 * @throws InvalidUnitIdUnitException
                 */
                function (MassUnitEnum $unit) {
                    return new MassUnitDto($unit);
                },
                MassUnitEnum::cases()
            ),
            self::VOLUME => array_map(
                /**
                 * @throws InvalidUnitIdUnitException
                 */
                function (VolumeUnitEnum $unit) {
                    return new VolumeUnitDto($unit);
                },
                VolumeUnitEnum::cases()
            ),
            self::TEMPERATURE => array_map(
                /**
                 * @throws InvalidUnitIdUnitException
                 */
                function (TemperatureUnitEnum $unit) {
                    return new TemperatureUnitDto($unit);
                },
                TemperatureUnitEnum::cases()
            ),
            self::SPEED => array_map(
                /**
                 * @throws InvalidUnitIdUnitException
                 */
                function (SpeedUnitEnum $unit) {
                    return new SpeedUnitDto($unit);
                },
                SpeedUnitEnum::cases()
            ),
            self::PRESSURE => array_map(
                /**
                 * @throws InvalidUnitIdUnitException
                 */
                function (PressureUnitEnum $unit) {
                    return new PressureUnitDto($unit);
                },
                PressureUnitEnum::cases()
            ),
            self::AREA => array_map(
                /**
                 * @throws InvalidUnitIdUnitException
                 */
                function (AreaUnitEnum $unit) {
                    return new AreaUnitDto($unit);
                },
                AreaUnitEnum::cases()
            ),
            self::TORQUE => array_map(
                /**
                 * @throws InvalidUnitIdUnitException
                 */
                function (TorqueUnitEnum $unit) {
                    return new TorqueUnitDto($unit);
                },
                TorqueUnitEnum::cases()
            ),
            self::POWER => array_map(
                /**
                 * @throws InvalidUnitIdUnitException
                 */
                function (PowerUnitEnum $unit) {
                    return new PowerUnitDto($unit);
                },
                PowerUnitEnum::cases()
            ),
            self::FUEL_CONSUMPTION => array_map(
                /**
                 * @throws InvalidUnitIdUnitException
                 */
                function (FuelConsumptionUnitEnum $unit) {
                    return new FuelConsumptionUnitDto($unit);
                },
                FuelConsumptionUnitEnum::cases()
            ),
            self::BATTERY_CAPACITY => array_map(
                /**
                 * @throws InvalidUnitIdUnitException
                 */
                function (BatteryCapacityUnitEnum $unit) {
                    return new BatteryCapacityUnitDto($unit);
                },
                BatteryCapacityUnitEnum::cases()
            ),
            self::VOLTAGE => array_map(
                /**
                 * @throws InvalidUnitIdUnitException
                 */
                function (VoltageUnitEnum $unit) {
                    return new VoltageUnitDto($unit);
                },
                VoltageUnitEnum::cases()
            ),
        };
    }
}
