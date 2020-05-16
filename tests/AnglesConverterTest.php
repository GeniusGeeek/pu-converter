<?php

namespace GeniusGeeek\UnitConverter\Type;

use Exception;
use GeniusGeeek\UnitConverter\UnitConverter;
use PHPUnit\Framework\TestCase;

class AnglesConverterTest extends TestCase
{
    /**
     * @test
     * @dataProvider frequencyDataProvider
     * @param $value
     * @param $fromUnit
     * @param $toUnit
     * @param $expected
     * @return void
     * @throws Exception
     */
    public function can_convert_between_frequency_units($value, $fromUnit, $toUnit, $expected)
    {
        $actual = UnitConverter::convert($value, $fromUnit, $toUnit);

        $this->assertEqualsWithDelta($expected, $actual, 0.01,"Converting {$value} {$fromUnit} to {$toUnit}");
    }

    public function frequencyDataProvider()
    {
        return [
            [1, 'deg', 'rad', 0.01745329],
            [1, 'deg', 'grad', 1.111111],

            [1, 'rad', 'deg', 57.29578],
            [1, 'rad', 'grad', 63.66198],

            [1, 'grad', 'deg', 0.9],
            [1, 'grad', 'rad', 0.01570796],
        ];
    }
}
