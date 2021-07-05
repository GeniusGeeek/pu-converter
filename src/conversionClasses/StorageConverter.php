<?php 
class Storage{
  public function disk_storage($value, $fromUnit, $toUnit)
  {
    switch ($fromUnit) {
      case 'bit': // from bit
        if ($toUnit === 'byte') {
          //to byte
          return $value / 8;
        } elseif ($toUnit === 'kb') {
          //to kilobyte
          return $value / 8000;
        } elseif ($toUnit === 'mb') {
          //to megabyte
          return $value / 8000000;
        } elseif ($toUnit === 'gb') {
          //to gigabyte
          return $value / 8000000000;
        } elseif ($toUnit === 'tb') {
          //to terabyte
          return $value / 8000000000000;
        } elseif ($toUnit === 'pb') {
          //to petabyte
          return $value / 8000000000000000;
        } else {
          return 'UnexpectedArgumentException';
        }

        break;

      case 'byte': //from byte
        if ($toUnit === 'bit') {
          //to bit
          return $value * 8;
        } elseif ($toUnit === 'kb') {
          //to kilobyte
          return $value / 1000;
        } elseif ($toUnit === 'mb') {
          //to megabyte
          return $value / 1000000;
        } elseif ($toUnit === 'gb') {
          //to gigabyte
          return $value / 1000000000;
        } elseif ($toUnit === 'tb') {
          //to terabyte
          return $value / 1000000000000;
        } elseif ($toUnit === 'pb') {
          //to petabyte
          return $value / 1000000000000000;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'kb': //from kilo byte
        if ($toUnit === 'byte') {
          //to byte
          return $value * 1000;
        } elseif ($toUnit === 'bit') {
          //to bit
          return $value * 8000;
        } elseif ($toUnit === 'mb') {
          //to megabyte
          return $value / 125;
        } elseif ($toUnit === 'gb') {
          //to gigabyte
          return $value / 125000;
        } elseif ($toUnit === 'tb') {
          //to terabyte
          return $value / 1000000000;
        } elseif ($toUnit === 'pb') {
          //to petabyte
          return $value / 1000000000000;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'mb':
        if ($toUnit === 'byte') {
          //to byte
          return $value * 1000000;
        } elseif ($toUnit === 'kb') {
          //to kilobyte
          return $value * 1000;
        } elseif ($toUnit === 'bit') {
          //to bit
          return $value * 8000000;
        } elseif ($toUnit === 'gb') {
          //to gigabyte
          return $value / 1074;
        } elseif ($toUnit === 'tb') {
          //to terabyte
          return $value / 1000000;
        } elseif ($toUnit === 'pb') {
          //to petabyte
          return $value / 1000000000;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'gb':
        if ($toUnit === 'byte') {
          //to byte
          return $value * 1000000000;
        } elseif ($toUnit === 'kb') {
          //to kilobyte
          return $value * 1000000;
        } elseif ($toUnit === 'mb') {
          //to megabyte
          return $value * 1000;
        } elseif ($toUnit === 'bit') {
          //to bit
          return $value * 8000000000;
        } elseif ($toUnit === 'tb') {
          //to terabyte
          return $value / 1000;
        } elseif ($toUnit === 'pb') {
          //to petabyte
          return $value / 1000000;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'tb':
        if ($toUnit === 'byte') {
          //to byte
          return $value * 1000000000000;
        } elseif ($toUnit === 'kb') {
          //to kilobyte
          return $value * 1000000000;
        } elseif ($toUnit === 'mb') {
          //to megabyte
          return $value * 1000000;
        } elseif ($toUnit === 'gb') {
          //to gigabyte
          return $value * 1000;
        } elseif ($toUnit === 'bit') {
          //to bit
          return $value * 8000000000000;
        } elseif ($toUnit === 'pb') {
          //to petabyte
          return $value / 1000;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'pb':
        if ($toUnit === 'byte') {
          //to byte
          return $value * 1000000000000000;
        } elseif ($toUnit === 'kb') {
          //to kilobyte
          return $value * 1000000000000;
        } elseif ($toUnit === 'mb') {
          //to megabyte
          return $value * 1000000000;
        } elseif ($toUnit === 'gb') {
          //to gigabyte
          return $value * 1000000;
        } elseif ($toUnit === 'tb') {
          //to terabyte
          return $value * 1000;
        } elseif ($toUnit === 'bit') {
          //to bit
          return $value * 8000000000000000;
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