<?php 
class Mass{
  public function mass_converter($value, $fromUnit, $toUnit)
  {
    switch ($fromUnit) {
      case 'kg': //from kilo gram
        if ($toUnit === 'g') {
          //to gram
          return $value * 1000;
        } elseif ($toUnit === 'lb') {
          //to pounds
          return $value * 2.205;
        } elseif ($toUnit === 'mg') {
          //to milligrams
          return $value * 1000000;
        } elseif ($toUnit === 't') {
          //to tonnes
          return $value / 1000;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'g': //from grams
        if ($toUnit === 'kg') {
          //to kilogram
          return $value / 1000;
        } elseif ($toUnit === 'lb') {
          //to pounds
          return $value / 454;
        } elseif ($toUnit === 'mg') {
          //to milligrams
          return $value * 1000;
        } elseif ($toUnit === 't') {
          //to tonnes
          return $value / 1000000;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'lb': //from pounds
        if ($toUnit === 'g') {
          //to gram
          return $value * 454;
        } elseif ($toUnit === 'kg') {
          //to kilogram
          return $value / 2.205;
        } elseif ($toUnit === 'mg') {
          //to milligrams
          return $value * 453592;
        } elseif ($toUnit === 't') {
          //to tonnes
          return $value / 2205;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'mg': //from milli gram
        if ($toUnit === 'g') {
          //to gram
          return $value / 1000;
        } elseif ($toUnit === 'lb') {
          //to pounds
          return $value / 453592;
        } elseif ($toUnit === 'kg') {
          //to kilograms
          return $value / 1000000;
        } elseif ($toUnit === 't') {
          //to tonnes
          return $value / 1000000000;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 't':
        if ($toUnit === 'g') {
          //to gram
          return $value / 1000000000;
        } elseif ($toUnit === 'lb') {
          //to pounds
          return $value * 2205;
        } elseif ($toUnit === 'mg') {
          //to milligrams
          return $value * 1000000000;
        } elseif ($toUnit === 'kg') {
          //to kilo gram
          return $value * 1000;
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