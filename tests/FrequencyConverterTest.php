<?php

namespace GeniusGeeek\UnitConverter;

use Exception;
use PHPUnit\Framework\TestCase;

class FrequencyConverterTest extends TestCase
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

        $this->assertEquals($expected, $actual, "Converting {$value} {$fromUnit} to {$toUnit}");
    }

    public function frequencyDataProvider()
    {
        return [
            [1000, 'hz', 'khz', 1],
            [1000000, 'hz', 'mhz', 1],
            [1000000000, 'hz', 'ghz', 1],

            [1, 'khz', 'hz', 1000],
            [1000, 'khz', 'mhz', 1],
            [1000000, 'khz', 'ghz', 1],

            [1, 'mhz', 'hz', 1000000],
            [1, 'mhz', 'khz', 1000],
            [1000, 'mhz', 'ghz', 1],

            [1, 'ghz', 'hz', 1000000000],
            [1, 'ghz', 'khz', 1000000],
            [1, 'ghz', 'mhz', 1000],

        ];
    }
}
