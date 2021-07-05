<?php

namespace GeniusGeeek\puconverter;

class Length{
  public function length_converter($value, $fromUnit, $toUnit)
  {
    switch ($fromUnit) {
      case 'km': //from kilometre
        if ($toUnit === 'm') {
          //to metres
          return $value * 1000;
        } elseif ($toUnit === 'cm') {
          //to centi metres
          return $value * 100000;
        } elseif ($toUnit === 'mm') {
          //to millimetres
          return $value * 1000000;
        } elseif ($toUnit === 'um') {
          //to micro metre
          return $value * 1000000000;
        } elseif ($toUnit === 'nm') {
          //to nano meter
          return $value * 1000000000000;
        } elseif ($toUnit === 'mi') {
          //to miles
          return $value / 1.609;
        } elseif ($toUnit === 'yd') {
          //to yards
          return $value * 1094;
        } elseif ($toUnit === 'ft') {
          //to foot
          return $value * 3281;
        } elseif ($toUnit === 'in') {
          //to inch
          return $value * 39370;
        } else {
          return 'UnexpectedArgumentException';
        }

        break;

      case 'm': //from metres
        if ($toUnit === 'km') {
          //to kilo metres
          return $value / 1000;
        } elseif ($toUnit === 'cm') {
          //to centi metres
          return $value * 100;
        } elseif ($toUnit === 'mm') {
          //to millimetres
          return $value * 1000;
        } elseif ($toUnit === 'um') {
          //to micro metre
          return $value * 1000000;
        } elseif ($toUnit === 'nm') {
          //to nano meter
          return $value * 1000000000;
        } elseif ($toUnit === 'mi') {
          //to miles
          return $value / 1609;
        } elseif ($toUnit === 'yd') {
          //to yards
          return $value * 1.094;
        } elseif ($toUnit === 'ft') {
          //to foot
          return $value * 3.281;
        } elseif ($toUnit === 'in') {
          //to inch
          return $value * 39.37;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'cm': //from centi metres
        if ($toUnit === 'm') {
          //to metres
          return $value / 100;
        } elseif ($toUnit === 'km') {
          //to kilo metres
          return $value / 100000;
        } elseif ($toUnit === 'mm') {
          //to millimetres
          return $value / 10;
        } elseif ($toUnit === 'um') {
          //to micro metre
          return $value * 10000;
        } elseif ($toUnit === 'nm') {
          //to nano meter
          return $value * 10000000;
        } elseif ($toUnit === 'mi') {
          //to miles
          return $value / 160934;
        } elseif ($toUnit === 'yd') {
          //to yards
          return $value / 91.44;
        } elseif ($toUnit === 'ft') {
          //to foot
          return $value / 30.48;
        } elseif ($toUnit === 'in') {
          //to inch
          return $value / 2.54;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'mm': //from milli metres
        if ($toUnit === 'm') {
          //to metres
          return $value / 1000;
        } elseif ($toUnit === 'cm') {
          //to centi metres
          return $value / 10;
        } elseif ($toUnit === 'km') {
          //to kilo metres
          return $value / 1000000;
        } elseif ($toUnit === 'um') {
          //to micro metre
          return $value * 1000;
        } elseif ($toUnit === 'nm') {
          //to nano meter
          return $value * 1000000;
        } elseif ($toUnit === 'mi') {
          //to miles
          return $value / 1609000;
        } elseif ($toUnit === 'yd') {
          //to yards
          return $value / 194;
        } elseif ($toUnit === 'ft') {
          //to foot
          return $value / 305;
        } elseif ($toUnit === 'in') {
          //to inch
          return $value / 25.4;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'um': //from micro metre
        if ($toUnit === 'm') {
          //to metres
          return $value / 1000000;
        } elseif ($toUnit === 'cm') {
          //to centi metres
          return $value / 10000;
        } elseif ($toUnit === 'mm') {
          //to millimetres
          return $value / 1000;
        } elseif ($toUnit === 'km') {
          //to kilo metre
          return $value / 1000000000;
        } elseif ($toUnit === 'nm') {
          //to nano meter
          return $value * 1000;
        } elseif ($toUnit === 'mi') {
          //to miles
          return $value / 1609000000;
        } elseif ($toUnit === 'yd') {
          //to yards
          return $value / 914400;
        } elseif ($toUnit === 'ft') {
          //to foot
          return $value / 304800;
        } elseif ($toUnit === 'in') {
          //to inch
          return $value / 25400;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'nm': //from nano metre
        if ($toUnit === 'm') {
          //to metres
          return $value / 1000;
        } elseif ($toUnit === 'cm') {
          //to centi metres
          return $value / 10000000;
        } elseif ($toUnit === 'mm') {
          //to millimetres
          return $value / 1000000;
        } elseif ($toUnit === 'um') {
          //to micro metre
          return $value / 1000;
        } elseif ($toUnit === 'km') {
          //to kilo meter
          return $value / 1000000000000;
        } elseif ($toUnit === 'mi') {
          //to miles
          return $value / 1609000000000;
        } elseif ($toUnit === 'yd') {
          //to yards
          return $value / 914400000;
        } elseif ($toUnit === 'ft') {
          //to foot
          return $value / 304800000;
        } elseif ($toUnit === 'in') {
          //to inch
          return $value / 25400000;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'mi': //from miles
        if ($toUnit === 'm') {
          //to metres
          return $value * 1609;
        } elseif ($toUnit === 'cm') {
          //to centi metres
          return $value * 160934;
        } elseif ($toUnit === 'mm') {
          //to millimetres
          return $value * 1609000;
        } elseif ($toUnit === 'um') {
          //to micro metre
          return $value * 1609000000;
        } elseif ($toUnit === 'nm') {
          //to nano meter
          return $value * 1609000000000;
        } elseif ($toUnit === 'km') {
          //to km
          return $value * 1.609;
        } elseif ($toUnit === 'yd') {
          //to yards
          return $value * 1760;
        } elseif ($toUnit === 'ft') {
          //to foot
          return $value * 5280;
        } elseif ($toUnit === 'in') {
          //to inch
          return $value * 63360;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'yd':
        if ($toUnit === 'm') {
          //to metres
          return $value / 1.094;
        } elseif ($toUnit === 'cm') {
          //to centi metres
          return $value * 91.44;
        } elseif ($toUnit === 'mm') {
          //to millimetres
          return $value * 914;
        } elseif ($toUnit === 'um') {
          //to micro metre
          return $value * 914400;
        } elseif ($toUnit === 'nm') {
          //to nano meter
          return $value * 914400000;
        } elseif ($toUnit === 'mi') {
          //to miles
          return $value / 1760;
        } elseif ($toUnit === 'km') {
          //to km
          return $value / 1094;
        } elseif ($toUnit === 'ft') {
          //to foot
          return $value * 3;
        } elseif ($toUnit === 'in') {
          //to inch
          return $value * 36;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'ft': //from foot
        if ($toUnit === 'm') {
          //to metres
          return $value / 3.281;
        } elseif ($toUnit === 'cm') {
          //to centi metres
          return $value * 30.40;
        } elseif ($toUnit === 'mm') {
          //to millimetres
          return $value * 305;
        } elseif ($toUnit === 'um') {
          //to micro metre
          return $value * 304800;
        } elseif ($toUnit === 'nm') {
          //to nano meter
          return $value * 304800000;
        } elseif ($toUnit === 'mi') {
          //to miles
          return $value / 5280;
        } elseif ($toUnit === 'yd') {
          //to yards
          return $value / 3;
        } elseif ($toUnit === 'km') {
          //to kilo metre
          return $value / 3281;
        } elseif ($toUnit === 'in') {
          //to inch
          return $value * 12;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'in':
        if ($toUnit === 'm') {
          //to metres
          return $value / 39.37;
        } elseif ($toUnit === 'cm') {
          //to centi metres
          return $value * 2.54;
        } elseif ($toUnit === 'mm') {
          //to millimetres
          return $value * 25.4;
        } elseif ($toUnit === 'um') {
          //to micro metre
          return $value * 25400;
        } elseif ($toUnit === 'nm') {
          //to nano meter
          return $value * 25400000;
        } elseif ($toUnit === 'mi') {
          //to miles
          return $value / 63360;
        } elseif ($toUnit === 'yd') {
          //to yards
          return $value / 36;
        } elseif ($toUnit === 'ft') {
          //to foot
          return $value * 12;
        } elseif ($toUnit === 'km') {
          //to kilo metre
          return $value / 39370;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      default:
        return 'UnexpectedArgumentException';
        break;
    }
  }
}