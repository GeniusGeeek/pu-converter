<?php

namespace unitConverter\puconverter;

class Angle
{
  public function angles_converter($value, $fromUnit, $toUnit)
  {
    switch ($fromUnit) {
      case 'deg': //from degree
        if ($toUnit === 'rad') {
          //to radian
          return $value * (3.142 / 180);
        } elseif ($toUnit === 'grad') {
          //to gradian
          return $value * (200 / 180);
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'rad': //from radian
        if ($toUnit === 'deg') {
          //to degree
          return $value * (180 / 3.142);
        } elseif ($toUnit === 'grad') {
          //gradian
          return $value * (200 / 3.142);
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'grad': //from gradian
        if ($toUnit === 'deg') {
          //to degree
          return $value * (180 / 200);
        } elseif ($toUnit === 'rad') {
          //to rad
          return $value * (3.142 / 200);
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
