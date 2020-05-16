<?php


namespace GeniusGeeek\UnitConverter\Type;


class AnglesConverter implements UnitType
{
    private const VALID_UNITS = [
        'deg'  => 'Degrees',
        'rad'  => 'Radian',
        'grad' => 'gradian',
    ];

    public static function convert($value, $fromUnit, $toUnit)
    {
        switch ($fromUnit) {
            case 'deg': //from degree
                if ($toUnit === 'rad') {
                    //to radian
                    return $value * (3.142 / 180);
                } elseif ($toUnit === 'grad') {
                    //to gradian
                    return $value * (200 / 180);
                }
                break;

            case 'rad': //from radian
                if ($toUnit === 'deg') {
//to degree
                    return $value * (180 / 3.142);
                } elseif ($toUnit === 'grad') {
                    //gradian
                    return $value * (200 / 3.142);
                }
                break;

            case 'grad': //from gradian
                if ($toUnit === 'deg') {
//to degree
                    return $value * (180 / 200);
                } elseif ($toUnit === 'rad') {
                    //to rad
                    return $value * (3.142 / 200);
                }
                break;
        }
    }

    public static function validUnits($fromUnit, $toUnit)
    {
        return array_key_exists($fromUnit, self::VALID_UNITS) && array_key_exists($fromUnit, self::VALID_UNITS);
    }
}
