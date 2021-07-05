<?php 
class Pressure{
  public function pressure_converter($value, $fromUnit, $toUnit)
  {
    switch ($fromUnit) {
      case 'pa': //from pascal
        if ($toUnit === 'kpa') {
          //to kilo pa
          return $value / 1000;
        } elseif ($toUnit === 'mpa') {
          //to milli pa
          return $value / 1000000;
        } elseif ($toUnit === 'bar') {
          //to bar
          return $value / 100000;
        } elseif ($toUnit === 'mbar') {
          //to milli bar
          return $value / 100;
        } elseif ($toUnit === 'psi') {
          //to pounds per square inch
          return $value / 6895;
        } else {
          return 'UnexpectedArgumentException';
        }

        break;

      case 'kpa':
        if ($toUnit === 'pa') {
          //to pascal
          return $value * 1000;
        } elseif ($toUnit === 'mpa') {
          //to milli pa
          return $value / 1000000;
        } elseif ($toUnit === 'bar') {
          //to bar
          return $value / 100;
        } elseif ($toUnit === 'mbar') {
          //to milli bar
          return $value * 10;
        } elseif ($toUnit === 'psi') {
          //to pounds per square inch
          return $value / 6.895;
        } else {
          return 'UnexpectedArgumentException';
        }

        break;

      case 'mpa': //milli pascal
        if ($toUnit === 'pa') {
          //to pascal
          return $value / 1000;
        } elseif ($toUnit === 'kpa') {
          //to kilopascal
          return $value / 1000000;
        } elseif ($toUnit === 'bar') {
          //to bar
          return $value / 100000000;
        } elseif ($toUnit === 'mbar') {
          //to milli bar
          return $value * 100000;
        } elseif ($toUnit === 'psi') {
          //to pounds per square inch
          return $value * 145.0377;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'bar':
        if ($toUnit === 'pa') {
          //to pascal
          return $value * 100000;
        } elseif ($toUnit === 'kpa') {
          //to kilopascal
          return $value * 100;
        } elseif ($toUnit === 'mpa') {
          //to mega pascal
          return $value / 10;
        } elseif ($toUnit === 'mbar') {
          //to milli bar
          return $value * 1000;
        } elseif ($toUnit === 'psi') {
          //to pounds per square inch
          return $value * 14.504;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'mbar':
        if ($toUnit === 'pa') {
          //to pascal
          return $value * 100;
        } elseif ($toUnit === 'kpa') {
          //to kilopascal
          return $value / 10;
        } elseif ($toUnit === 'mpa') {
          //to mega pascal
          return $value / 10;
        } elseif ($toUnit === 'bar') {
          //to  bar
          return $value / 1000;
        } elseif ($toUnit === 'psi') {
          //to pounds per square inch
          return $value / 68.948;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'psi':
        if ($toUnit === 'pa') {
          //to pascal
          return $value * 6.895;
        } elseif ($toUnit === 'kpa') {
          //to kilopascal
          return $value / 6.895;
        } elseif ($toUnit === 'mpa') {
          //to mega pascal
          return $value / 10000;
        } elseif ($toUnit === 'mbar') {
          //to milli bar
          return $value * 68.948;
        } elseif ($toUnit === 'bar') {
          //to  bar
          return $value / 14.504;
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