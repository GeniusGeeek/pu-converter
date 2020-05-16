<?php


namespace GeniusGeeek\UnitConverter;


use Exception;
use GeniusGeeek\UnitConverter\Type\AnglesConverter;
use GeniusGeeek\UnitConverter\Type\FrequencyConverter;
use GeniusGeeek\UnitConverter\Type\UnitType;

class UnitConverter
{
    /**
     * @param $value
     * @param $fromUnit
     * @param $toUnit
     * @return mixed
     * @throws Exception
     */
    public static function convert($value, $fromUnit, $toUnit)
    {
        $type = UnitConverter::getType($fromUnit, $toUnit);

        if ($fromUnit === $toUnit) {
//            return $value;
            throw new Exception('Same unit conversion exception.');
        }

        /** @var UnitType $type */
        return $type::convert($value, $fromUnit, $toUnit);
    }

    /**
     * @param $fromUnit
     * @param $toUnit
     * @return string
     * @throws Exception
     */
    private static function getType($fromUnit, $toUnit)
    {
        if (AnglesConverter::validUnits($fromUnit, $toUnit)) {
            return AnglesConverter::class;
        }
        if (FrequencyConverter::validUnits($fromUnit, $toUnit)) {
            return FrequencyConverter::class;
        }
//        if (AreaConverter::validUnits($fromUnit, $toUnit)) {
//            return AreaConverter::class;
//        }
//        if (TimeConverter::validUnits($fromUnit, $toUnit)) {
//            return TimeConverter::class;
//        }
//        if (VolumeConverter::validUnits($fromUnit, $toUnit)) {
//            return VolumeConverter::class;
//        }
//        if (SpeedConverter::validUnits($fromUnit, $toUnit)) {
//            return SpeedConverter::class;
//        }
//        if (LengthConverter::validUnits($fromUnit, $toUnit)) {
//            return LengthConverter::class;
//        }
//        if (PressureConverter::validUnits($fromUnit, $toUnit)) {
//            return PressureConverter::class;
//        }
//        if (MassConverter::validUnits($fromUnit, $toUnit)) {
//            return MassConverter::class;
//        }
//        if (DiskStorageConverter::validUnits($fromUnit, $toUnit)) {
//            return DiskStorageConverter::class;
//        }
//        if (EnergyConverter::validUnits($fromUnit, $toUnit)) {
//            return EnergyConverter::class;
//        }

        throw new Exception('Argument Error' . " $fromUnit, $toUnit");
    }
}
