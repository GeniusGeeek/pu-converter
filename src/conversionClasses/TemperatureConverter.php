<?php

namespace GeniusGeeek\puconverter;

class Temperature
{
  function temperature_converter($value, $fromUnit, $toUnit)
  {
    switch ($fromUnit) {
      case 'f': //from fahrenheit
        if ($toUnit === 'k') {
          //to kelvin
          return ($value - 32) * 5 / 9 + 273;
        } elseif ($toUnit === 'c') {
          //to celsius
          return ($value - 32) * 5 / 9;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'k': //from kelvin
        if ($toUnit === 'c') {
          //to celsius
          return $value - 273;
        } elseif ($toUnit === 'f') {
          //to fahrenheit
          return ($value - 273) * 9 / 5 + 32;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'c': //from celsius
        if ($toUnit === 'f') {
          //to fahrenheit
          return ($value * 9 / 5) + 32;
        } elseif ($toUnit === 'k') {
          //to kelvin
          return $value + 273;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      default:
        return "UnexpectedArgumentException";
        break;
    }
  }
}
