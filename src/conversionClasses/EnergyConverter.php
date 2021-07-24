<?php

namespace unitConverter\puconverter;

class Energy{
 public function energy_converter($value, $fromUnit, $toUnit)
  {
    switch ($fromUnit) {
      case 'j': //from joules
        if ($toUnit === 'kj') {
          //to kilo joules
          return $value / 1000;
        } elseif ($toUnit === 'gcal') {
          //to gram calorie
          return $value / 4.184;
        } elseif ($toUnit === 'whr') {
          //to watt hr
          return $value / 3600;
        } elseif ($toUnit === 'kwhr') {
          //to kilo watt hr
          return $value / 36000000;
        } elseif ($toUnit === 'ev') {
          //to electronvolt
          return $value * 6242000000000000000;
        } elseif ($toUnit === 'kcal') {
          //to kilo calorie
          return $value / 4184;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'kj': // from kilo joules
        if ($toUnit === 'j') {
          //to  joules
          return $value * 1000;
        } elseif ($toUnit === 'gcal') {
          //to gram calorie
          return $value * 239;
        } elseif ($toUnit === 'whr') {
          //to watt hr
          return $value / 3.6;
        } elseif ($toUnit === 'kwhr') {
          //to kilo watt hr
          return $value / 3600;
        } elseif ($toUnit === 'ev') {
          //to electronvolt
          return $value * 6241500000000000000000;
        } elseif ($toUnit === 'kcal') {
          //to kilo calorie
          return $value / 4.184;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'gcal': //from gram calorie
        if ($toUnit === 'kj') {
          //to kilo joules
          return $value / 239;
        } elseif ($toUnit === 'j') {
          //to  joules
          return $value * 4.184;
        } elseif ($toUnit === 'whr') {
          //to watt hr
          return $value / 860;
        } elseif ($toUnit === 'kwhr') {
          //to kilo watt hr
          return $value / 860421;
        } elseif ($toUnit === 'ev') {
          //to electronvolt
          return $value * 26130000000000000000;
        } elseif ($toUnit === 'kcal') {
          //to kilo calorie
          return $value / 1000;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'whr': //from watt hr
        if ($toUnit === 'kj') {
          //to kilo joules
          return $value * 3.6;
        } elseif ($toUnit === 'gcal') {
          //to gram calorie
          return $value * 860;
        } elseif ($toUnit === 'j') {
          //to joules
          return $value * 3600;
        } elseif ($toUnit === 'kwhr') {
          //to kilo watt hr
          return $value / 1000;
        } elseif ($toUnit === 'ev') {
          //to electronvolt
          return $value * 22469000000000000000000;
        } elseif ($toUnit === 'kcal') {
          //to kilo calorie
          return $value / 1.162;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'kwhr':
        if ($toUnit === 'kj') {
          //to kilo joules
          return $value * 1000;
        } elseif ($toUnit === 'gcal') {
          //to gram calorie
          return $value * 860421;
        } elseif ($toUnit === 'whr') {
          //to watt hr
          return $value * 1000;
        } elseif ($toUnit === 'j') {
          //to joules
          return $value * 3600000;
        } elseif ($toUnit === 'ev') {
          //to electronvolt
          return $value * 22469000000000000000000000;
        } elseif ($toUnit === 'kcal') {
          //to kilo calorie
          return $value * 860;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'ev':
        if ($toUnit === 'kj') {
          //to kilo joules
          return $value * 0.000000000000000000000160218;
        } elseif ($toUnit === 'gcal') {
          //to gram calorie
          return $value * 0.0000000000000000000382765;
        } elseif ($toUnit === 'whr') {
          //to watt hr
          return $value * 0.0000000000000000000000044505;
        } elseif ($toUnit === 'kwhr') {
          //to kilo watt hr
          return $value * 0.000000000000000000000000044505;
        } elseif ($toUnit === 'j') {
          //to joules
          return $value / 0.0000000000000000062415;
        } elseif ($toUnit === 'kcal') {
          //to kilo calorie
          return $value * 0.000000000000000000000038293;
        } else {
          return 'UnexpectedArgumentException';
        }
        break;

      case 'kcal':
        if ($toUnit === 'kj') {
          //to kilo joules
          return $value * 4.184;
        } elseif ($toUnit === 'gcal') {
          //to gram calorie
          return $value * 1000;
        } elseif ($toUnit === 'whr') {
          //to watt hr
          return $value * 1.162;
        } elseif ($toUnit === 'kwhr') {
          //to kilo watt hr
          return $value / 860;
        } elseif ($toUnit === 'ev') {
          //to electronvolt
          return $value * 2.6114000000000000000000;
        } elseif ($toUnit === 'j') {
          //to joules
          return $value * 4184;
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