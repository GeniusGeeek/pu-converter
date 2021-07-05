<?php

namespace GeniusGeeek\puconverter;

class Time
{
  public function time_converter($value, $fromUnit, $toUnit)
  {
    switch ($fromUnit) {
      case 'ms': //from milli seconds
        if ($toUnit === 's') {
          //to seconds
          return $value / 1000;
        } elseif ($toUnit === 'min') {
          //to minutes
          return $value / 60000;
        } elseif ($toUnit === 'hr') {
          //to hours
          return $value / 3600000;
        } elseif ($toUnit === 'day') {
          //to days
          return $value / 86400000;
        } elseif ($toUnit === 'week') {
          //to weeks
          return $value / 604800000;
        } elseif ($toUnit === 'month') {
          //to month
          return $value / 2628000000;
        } elseif ($toUnit === 'yr') {
          //to year
          return $value / 31540000000;
        } elseif ($toUnit === 'dec') {
          //to decade
          return $value / 315400000000;
        } elseif ($toUnit === 'cen') {
          //to century
          return $value / 3154000000000;
        } else {
          return "UnexpectedArgumentException";
        }
        break;

      case 's': //from seconds
        if ($toUnit === 'ms') {
          //to milli seconds
          return $value * 1000;
        }

        if ($toUnit === 'week') {
          //to weeks
          return $value / 604800;
        } elseif ($toUnit === 'm') {
          //to minutes
          return $value / 60;
        } elseif ($toUnit === 'hr') {
          //to hours
          return $value / 3600;
        } elseif ($toUnit === 'month') {
          //to months
          return $value / 2628000;
        } elseif ($toUnit === 'day') {
          //to days
          return $value / 86400;
        } elseif ($toUnit === 'yr') {
          //to years
          return $value / 31540000;
        } elseif ($toUnit === 'dec') {
          //to decade
          return $value / 315400000;
        } elseif ($toUnit === 'cen') {
          //to century
          return $value / 315400000;
        } else {
          return "UnexpectedArgumentException";
        }

        break;

      case 'min': //from minute
        if ($toUnit === 'ms') {
          //to weeks
          return $value * 60000;
        }

        if ($toUnit === 'week') {
          //to weeks
          return $value / 10080;
        } elseif ($toUnit === 's') {
          //to seconds
          return $value * 60;
        } elseif ($toUnit === 'hr') {
          //to hours
          return $value / 60;
        } elseif ($toUnit === 'month') {
          //to months
          return $value / 43800;
        } elseif ($toUnit === 'day') {
          //to days
          return $value / 1440;
        } elseif ($toUnit === 'yr') {
          //years
          return $value / 525600;
        } elseif ($toUnit === 'dec') {
          //to decade
          return $value / 5256000;
        } elseif ($toUnit === 'cen') {
          //to century
          return $value / 5256000;
        } else {
          return "UnexpectedArgumentException";
        }

        break;

      case 'hr':
        if ($toUnit === 's') {
          //to seconds
          return $value / 3600;
        } elseif ($toUnit === 'month') {
          //to minutes
          return $value / 60;
        } elseif ($toUnit === 'ms') {
          //to milli sec
          return $value / 3600000;
        } elseif ($toUnit === 'day') {
          //days
          return $value / 24;
        } elseif ($toUnit === 'w') {
          //to weeks
          return $value / 168;
        } elseif ($toUnit === 'month') {
          //to month
          return $value / 730;
        } elseif ($toUnit === 'yr') {
          //to year
          return $value / 8760;
        } elseif ($toUnit === 'dec') {
          //to decade
          return $value / 87600;
        } elseif ($toUnit === 'cen') {
          //to century
          return $value / 876000;
        } else {
          return "UnexpectedArgumentException";
        }
        break;

      case 'day': //from day
        if ($toUnit === 's') {
          //to seconds
          return $value * 86400;
        } elseif ($toUnit === 'min') {
          //to minutes
          return $value * 1440;
        } elseif ($toUnit === 'ms') {
          //to milli sec
          return $value * 86400000;
        } elseif ($toUnit === 'hr') {
          //to hour
          return $value / 24;
        } elseif ($toUnit === 'week') {
          //to weeks
          return $value / 7;
        } elseif ($toUnit === 'month') {
          //to month
          return $value / 30.417;
        } elseif ($toUnit === 'yr') {
          //to year
          return $value / 365;
        } elseif ($toUnit === 'dec') {
          //to decade
          return $value / 3650;
        } elseif ($fromUnit === 'cen') {
          //to century
          return $value / 36500;
        } else {
          return "UnexpectedArgumentException";
        }
        break;

      case 'week': //from week
        if ($toUnit === 's') {
          // to seconds
          return $value * 604800;
        } elseif ($toUnit === 'min') {
          //to minutes
          return $value * 10080;
        } elseif ($toUnit === 'hr') {
          //to hours
          return $value * 168;
        } elseif ($toUnit === 'day') {
          //to days
          return $value * 7;
        } elseif ($toUnit === 'ms') {
          //to milli sec
          return $value * 604800000;
        } elseif ($toUnit === 'month') {
          //to month
          return $value / 4.345;
        } elseif ($toUnit === 'yr') {
          //to year
          return $value / 52.143;
        } elseif ($toUnit === 'dec') {
          //to decade
          return $value / 521;
        } elseif ($toUnit === 'cen') {
          //to century
          return $value / 5214;
        } else {
          return "UnexpectedArgumentException";
        }
        break;

      case 'month': //from month
        if ($toUnit === 's') {
          //to seconds
          return $value * 2628000;
        } elseif ($toUnit === 'min') {
          //to minutes
          return $value * 43800;
        } elseif ($toUnit === 'hr') {
          //to hours
          return $value * 730;
        } elseif ($toUnit === 'day') {
          //to days
          return $value * 30.417;
        } elseif ($toUnit === 'week') {
          //to weeks
          return $value * 4.345;
        } elseif ($toUnit === 'ms') {
          //to milli sec
          return $value * 2628000000;
        } elseif ($toUnit === 'yr') {
          //to yr
          return $value / 12;
        } elseif ($toUnit === 'dec') {
          // to decade
          return $value / 120;
        } elseif ($toUnit === 'cen') {
          //to century
          return $value / 1200;
        } else {
          return "UnexpectedArgumentException";
        }
        break;

      case 'yr': //from year
        if ($toUnit === 's') {
          //seconds
          return $value * 31540000;
        } elseif ($toUnit === 'min') {
          //to minutes
          return $value * 525600;
        } elseif ($toUnit === 'hr') {
          //to hours
          return $value * 8760;
        } elseif ($toUnit === 'day') {
          //to days
          return $value * 365;
        } elseif ($toUnit === 'week') {
          //to weeks
          return $value * 52.143;
        } elseif ($toUnit === 'month') {
          //to month
          return $value * 12;
        } elseif ($toUnit === 'ms') {
          //to milli sec
          return $value * 31540000000;
        } elseif ($toUnit === 'dec') {
          //to decade
          return $value / 10;
        } elseif ($toUnit === 'c') {
          //to century
          return $value / 100;
        } else {
          return "UnexpectedArgumentException";
        }
        break;

      case 'dec': // from decade
        if ($toUnit === 's') {
          //to seconds
          return $value * 315400000;
        } elseif ($toUnit === 'min') {
          //to minutes
          return $value * 5256000;
        } elseif ($toUnit === 'hr') {
          //to hours
          return $value * 87600;
        } elseif ($toUnit === 'day') {
          //to days
          return $value * 3650;
        } elseif ($toUnit === 'week') {
          //to weeks
          return $value * 521;
        } elseif ($toUnit === 'month') {
          //to month
          return $value * 120;
        } elseif ($toUnit === 'ms') {
          //to milli sec
          return $value * 315400000000;
        } elseif ($toUnit === 'yr') {
          //to yr
          return $value * 10;
        } elseif ($toUnit === 'c') {
          //to century
          return $value / 10;
        } else {
          return "UnexpectedArgumentException";
        }
        break;

      case 'cen': //from century
        if ($toUnit === 's') {
          //to seconds
          return $value * 3154000000;
        } elseif ($toUnit === 'min') {
          //to minutes
          return $value * 52560000;
        } elseif ($toUnit === 'hr') {
          //to hours
          return $value * 876000;
        } elseif ($toUnit === 'day') {
          //to days
          return $value * 36500;
        } elseif ($toUnit === 'week') {
          //to weeks
          return $value * 5214;
        } elseif ($toUnit === 'month') {
          //to month
          return $value * 1200;
        } elseif ($toUnit === 'ms') {
          //to milli sec
          return $value * 3154000000000;
        } elseif ($toUnit === 'yr') {
          //to yr
          return $value * 1200;
        } elseif ($toUnit === 'dec') {
          //to decade
          return $value * 100;
        } else {
          return "UnexpectedArgumentException";
        }
        break;

      default:
        return 'UnexpectedArgumentException';
        break;
    }
  }

}
