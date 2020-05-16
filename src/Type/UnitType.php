<?php


namespace GeniusGeeek\UnitConverter\Type;


interface UnitType
{
    public static function convert($value, $fromUnit, $toUnit);

    public static function validUnits($fromUnit, $toUnit);
}