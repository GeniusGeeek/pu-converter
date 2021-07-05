<?php 
class Frequency{
  public function frequency_converter($value, $fromUnit, $toUnit)
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
        } else {
          return 'UnexpectedArgumentException';
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
        } else {
          return 'UnexpectedArgumentException';
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
        } else {
          return 'UnexpectedArgumentException';
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
          return 'UnexpectedArgumentException';
        }
        break;

      default:
        return 'UnexpectedArgumentException';
        break;
    }
  }

}