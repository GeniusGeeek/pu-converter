<?php

namespace unitConverter\puconverter;

class Volume{
  public function volume_converter($value, $fromUnit, $toUnit)
  {
    switch ($fromUnit) {
      case 'l': //from litres
        if ($toUnit === 'oz') {
          //to fluid ounces
          return $value / 1.137;
        } elseif ($toUnit === 'ml') {
          //to milli litre
          return $value * 1000;
        } elseif ($toUnit === 'gal') {
          //to gallons
          return $value / 4.546;
        } elseif ($toUnit === 'ft3') {
          //to cubic ft
          return $value * 61.024;
        } elseif ($toUnit === 'in3') {
          //to cubic inch
          return $value / 10000;
        } elseif ($toUnit === 'm3') {
          //to cubic meters
          return $value / 1000;
        } elseif ($toUnit === 'cm3') {
          //to  cubic centimetre
          return $value * 1000;
        } else {
          return 'UnexpectedArgumentException';
        }

        break;

      case 'm3': //from cubic meters
        if ($toUnit === 'oz') {
          //to fluid ounces
          return $value * 33814;
        } elseif ($toUnit === 'ml') {
          //to milli litre
          return $value * 1000000;
        } elseif ($toUnit === 'gal') {
          //to gallons
          return $value * 254;
        } elseif ($toUnit === 'ft3') {
          //to cubic ft
          return $value * 35.315;
        } elseif ($toUnit === 'in3') {
          //to cubic inch
          return $value * 61024;
        } elseif ($toUnit === 'l') {
          //to  litres
          return $value * 1000;
        } elseif ($toUnit === 'cm3') {
          //to  cubic centimetre
          return $value * 1000000;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'ml': //from milli litres
        if ($toUnit === 'oz') {
          //to fluid ounces
          return $value / 29.574;
        } elseif ($toUnit === 'ml') {
          //to milli litre
          return $value / 1000000;
        } elseif ($toUnit === 'gal') {
          //to gallons
          return $value / 4546;
        } elseif ($toUnit === 'ft3') {
          //to cubic ft
          return $value / 28317;
        } elseif ($toUnit === 'in3') {
          //to cubic inch
          return $value / 16.387;
        } elseif ($toUnit === 'l') {
          //to  litres
          return $value / 1000;
        } elseif ($toUnit === 'cm3') {
          //to  cubic centimetre
          return $value * 1;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'gal': //from gallons
        if ($toUnit === 'oz') {
          //to fluid ounces
          return $value * 154;
        } elseif ($toUnit === 'ml') {
          //to milli litre
          return $value * 4546;
        } elseif ($toUnit === 'm3') {
          //to cubic metre
          return $value / 220;
        } elseif ($toUnit === 'ft3') {
          //to cubic ft
          return $value / 6.229;
        } elseif ($toUnit === 'in3') {
          //to cubic inch
          return $value * 277;
        } elseif ($toUnit === 'l') {
          //to  litres
          return $value * 4.546;
        } elseif ($toUnit === 'cm3') {
          //to  cubic centimetre
          return $value * 4546;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'oz': //from fluid ounces
        if ($toUnit === 'm3') {
          //to cubic meters
          return $value / 33814;
        } elseif ($toUnit === 'ml') {
          //to milli litre
          return $value * 29.574;
        } elseif ($toUnit === 'gal') {
          //to gallons
          return $value / 154;
        } elseif ($toUnit === 'ft3') {
          //to cubic ft
          return $value / 958;
        } elseif ($toUnit === 'in3') {
          //to cubic inch
          return $value * 1.805;
        } elseif ($toUnit === 'l') {
          //to  litres
          return $value / 33.814;
        } elseif ($toUnit === 'cm3') {
          //to  cubic centimetre
          return $value * 29.574;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'in3': //from cubic inch
        if ($toUnit === 'oz') {
          //to fluid ounces
          return $value / 1.805;
        } elseif ($toUnit === 'ml') {
          //to milli litre
          return $value * 16.387;
        } elseif ($toUnit === 'gal') {
          //to gallons
          return $value / 277;
        } elseif ($toUnit === 'ft3') {
          //to cubic ft
          return $value / 1728;
        } elseif ($toUnit === 'm3') {
          //to cubic metre
          return $value / 61024;
        } elseif ($toUnit === 'l') {
          //to  litres
          return $value / 61.024;
        } elseif ($toUnit === 'cm3') {
          //to  cubic centimetre
          return $value * 16.387;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'ft3': //from cubic foot
        if ($toUnit === 'oz') {
          //to fluid ounces
          return $value * 958;
        } elseif ($toUnit === 'ml') {
          //to milli litre
          return $value * 28317;
        } elseif ($toUnit === 'gal') {
          //to gallons
          return $value * 6.229;
        } elseif ($toUnit === 'm3') {
          //to cubic metre
          return $value / 35.315;
        } elseif ($toUnit === 'in3') {
          //to cubic inch
          return $value * 1728;
        } elseif ($toUnit === 'l') {
          //to  litres
          return $value * 28.317;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'cm3': //from cubic centimetres
        if ($toUnit === 'oz') {
          //to fluid ounces
          return $value / 29.574;
        } elseif ($toUnit === 'ml') {
          //to milli litre
          return $value * 1;
        } elseif ($toUnit === 'gal') {
          //to gallons
          return $value * 4546;
        } elseif ($toUnit === 'm3') {
          //to cubic metre
          return $value * 1000000;
        } elseif ($toUnit === 'in3') {
          //to cubic inch
          return $value * 16.387;
        } elseif ($toUnit === 'l') {
          //to  litres
          return $value / 1000;
        } elseif ($toUnit === 'ft') {
          //to  ft
          return $value / 283317;
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