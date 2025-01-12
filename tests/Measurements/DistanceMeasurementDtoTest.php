<?php

namespace Measurements;

use PHPUnit\Framework\MockObject\Exception;
use Webboy\MeasurementUnits\Enums\DistanceUnitEnum;
use Webboy\MeasurementUnits\Enums\MeasurementEnum;
use Webboy\MeasurementUnits\Exceptions\MeasurementException;
use Webboy\MeasurementUnits\Measurements\DistanceMeasurementDto;
use PHPUnit\Framework\TestCase;
use Webboy\MeasurementUnits\Units\DistanceUnitDto;

class DistanceMeasurementDtoTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testThrowsExceptionForInvalidId(): void
    {
        // Arrange: Invalid base unit ID and valid mock units
        $invalidBaseUnitId = 'invalid'; // Example invalid ID
        $mockUnits = [
            $this->createMock(DistanceUnitDto::class),
        ];

        // Expect: Exception due to invalid base unit ID
        $this->expectException(MeasurementException::class);

        // Act: Attempt to create an instance of DistanceMeasurementDto
        new DistanceMeasurementDto(
            name: 'Distance',
            base_unit_id: $invalidBaseUnitId,
            units: $mockUnits
        );
    }

    public function testSuccessfulDefaultConstruction()
    {
        // Act: Create an instance of DistanceMeasurementDto
        $dto = new DistanceMeasurementDto();

        $validBaseUnitId = DistanceUnitEnum::METER->value;

        // Assert: Check assigned properties
        $this->assertSame(MeasurementEnum::DISTANCE->value, $dto->id);
        $this->assertSame($validBaseUnitId, $dto->base_unit_id);
    }
}
