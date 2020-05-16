<?php


namespace GeniusGeeek\UnitConverter\Type;


class FrequencyConverter implements UnitType
{
    private const VALID_UNITS = [
        'hz'  => 'hertz',
        'khz' => 'kilo hertz',
        'mhz' => 'mega hertz',
        'ghz' => 'giga hertz'
    ];

    public static function convert($value, $fromUnit, $toUnit)
    {
        switch ($fromUnit) {
            case 'hz': // from hertz
                if ($toUnit === 'khz') {
                    //to kilo hertz
                    return $value / 1000;
                } elseif ($toUnit === 'mhz') {
                    //to mega hertz
                    return $value / 1000000;
                } elseif ($toUnit === 'ghz') {
                    //to giga hertz
                    return $value / 1000000000;
                }
                break;

            case 'khz': // from kilo hertz
                if ($toUnit === 'hz') {
                    //to hertz
                    return $value * 1000;
                } elseif ($toUnit === 'mhz') {
                    //to mega hertz
                    return $value / 1000;
                } elseif ($toUnit === 'ghz') {
                    //to giga hertz
                    return $value / 1000000;
                }
                break;

            case 'mhz':
                if ($toUnit === 'khz') {
                    //to kilo hertz
                    return $value * 1000;
                } elseif ($toUnit === 'hz') {
                    //to  hertz
                    return $value * 1000000;
                } elseif ($toUnit === 'ghz') {
                    //to giga hertz
                    return $value / 1000;
                }
                break;

            case 'ghz':
                if ($toUnit === 'khz') {
                    //to kilo hertz
                    return $value * 1000000;
                } elseif ($toUnit === 'mhz') {
                    //to mega hertz
                    return $value * 1000;
                } elseif ($toUnit === 'hz') {
                    //to  hertz
                    return $value * 1000000000;
                } else {
                    return 'Argument Error';
                }
                break;
        }
    }

    public static function validUnits($fromUnit, $toUnit)
    {
        return array_key_exists($fromUnit, self::VALID_UNITS) && array_key_exists($fromUnit, self::VALID_UNITS);
    }
}
