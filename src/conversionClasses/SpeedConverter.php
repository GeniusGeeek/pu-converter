<?php

namespace GeniusGeeek\puconverter;

class Speed{
  public function speed_converter($value, $fromUnit, $toUnit)
  {
    switch ($fromUnit) {
      case 'mps': //from metres per seconds
        if ($toUnit === 'kph') {
          //to km per hr
          return $value * 3.6;
        } elseif ($toUnit === 'knots') {
          //to knots
          return $value * 1.944;
        } elseif ($toUnit === 'mph') {
          //to miles per hr
          return $value * 2.237;
        } else {
          return 'UnexpectedArgumentException';
        }

        break;

      case 'kph': //from km per hr
        if ($toUnit === 'mps') {
          //to metre per sec
          return $value / 3.6;
        } elseif ($toUnit === 'knots') {
          //to knots
          return $value * 1.852;
        } elseif ($toUnit === 'mph') {
          //to miles per hr
          return $value / 1.609;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'mph': //from miles per hr
        if ($toUnit === 'kph') {
          //to km per hr
          return $value * 1.609;
        } elseif ($toUnit === 'knots') {
          //to knots
          return $value / 1.151;
        } elseif ($toUnit === 'mps') {
          //to metres per sec
          return $value / 2.237;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'knots': //from knots
        if ($toUnit === 'kph') {
          //to km per hr
          return $value * 1.852;
        } elseif ($toUnit === 'mps') {
          //to metre per sec
          return $value / 1.944;
        } elseif ($toUnit === 'mph') {
          //to miles per hr
          return $value * 1.151;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      default:
        # code...
        break;
    }
  }
}