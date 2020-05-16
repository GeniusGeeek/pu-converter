<?php
############################################

/*
 *UNIT-CONVERTER LIBRARY  v1   by Gracious(graciousemmanuel52@gmail.com)
 *Open-Source Project
 */

#############################################

/*TEMPERATURE CONVERTER*/

function temperature_converter($value, $fromUnit, $toUnit)
{
   switch ($fromUnit) {
      case 'f': //from fahrenheit
         if ($toUnit == 'k') {
            //to kelvin
            $convert = ($value - 32) * 5 / 9 + 273;
            return $convert;
         } else if ($toUnit == 'c') {
            //to celcius
            $convert = ($value - 32) * 5 / 9;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'k': //from kelvin
         if ($toUnit == 'c') {
            //to celcius
            $convert = $value - 273;
            return $convert;
         } else if ($toUnit == 'f') {
            //to fahrenheit
            $convert = ($value - 273) * 9 / 5 + 32;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'c': //from celius
         if ($toUnit == 'f') {
            //to fahrenheir
            $convert = ($value * 9 / 5) + 32;
            return $convert;
         } else if ($toUnit == 'k') {
//to kelvin
            $convert = $value + 273;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      default:
         return "Arguement Error";
         break;
   }
}

/* Area Converter*/

function area_converter($value, $fromUnit, $toUnit)
{
   switch ($fromUnit) {
      case 'm2': //from sqr meter
         if ($toUnit == 'km2') {
            //to sqr km
            $convert = $value / 1000000;
            return $convert;

         } else if ($toUnit == 'mi2') {
            //to sqr miles
            $convert = $value / 2590000;
            return $convert;
         } else if ($toUnit == 'yd2') {
            //to sqr yard
            $convert = $value * 1.196;
            return $convert;
         } else if ($toUnit == 'ft2') {
            //to sqr ft
            $convert = $value * 10.764;
            return $convert;
         } else if ($toUnit == 'in2') {
            //to sqr inch
            $convert = $value * 1550;
            return $convert;
         } else if ($toUnit == 'ha') {
            //to sqr hectare
            $convert = $value * 10000;
            return $convert;
         } else if ($toUnit == 'ac') {
            //to sqr acre
            $convert = $value / 4047;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'km2': //from km2
         if ($toUnit == 'sM') {
            //to sqr m
            $convert = $value * 1000000;
            return $convert;

         } else if ($toUnit == 'mi2') {
            //to sqr miles
            $convert = $value / 2.59;
            return $convert;
         } else if ($toUnit == 'yd2') {
            //to sqr yard
            $convert = $value * 1.196000;
            return $convert;
         } else if ($toUnit == 'ft2') {
            //to sqr ft
            $convert = $value * 1.0760000;
            return $convert;
         } else if ($toUnit == 'in2') {
            //to sqr inch
            $convert = $value * 1.550000000;
            return $convert;
         } else if ($toUnit == 'ha') {
            // to hectare
            $convert = $value * 100;
            return $convert;
         } else if ($toUnit == 'ac') {
            // to acre
            $convert = $value * 247;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'ac': //from acre
         if ($toUnit == 'ha') {
            //to hectare
            $convert = $value / 2.471;
            return $convert;
         } else if ($toUnit == 'm2') {
            //to sqr m
            $convert = $value * 4047;
            return $convert;
         } else if ($toUnit == 'km2') {
            //to sqr km
            $convert = $value / 247;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'ha': //from hactare
         if ($toUnit == 'ac') {
            //to acre
            $convert = $value * 2.471;
            return $convert;
         } else if ($toUnit == 'm2') {
            //to sqr m
            $convert = $value * 10000;
            return $convert;
         } else if ($toUnit == 'km2') {
            //to sqr km
            $convert = $value / 100;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      default:
         return 'Arguement Error';
         break;
   }
}

/* PLANE ANGLES CONVERTER*/

function angles_converter($value, $fromUnit, $toUnit)
{
   switch ($fromUnit) {
      case 'deg': //from degree
         if ($toUnit == 'rad') {
            //to radian
            $convert = $value * (3.142 / 180);
            return $convert;

         } else if ($toUnit == 'grad') {
            //to gradian
            $convert = $value * (200 / 180);
            return $convert;

         } else {
            return 'Arguement Error';

         }
         break;

      case 'rad': //from radian
         if ($toUnit == 'deg') {
//to degree
            $convert = $value * (180 / 3.142);
            return $convert;
         } else if ($toUnit == 'grad') {
            //gradian
            $convert = $value * (200 / 3.142);
            return $convert;

         } else {
            return 'Arguement Error';

         }
         break;

      case 'grad': //from gradian
         if ($toUnit == 'deg') {
//to degree
            $convert = $value * (180 / 200);
            return $convert;
         } else if ($toUnit == 'rad') {
            //to rad
            $convert = $value * (3.142 / 200);
            return $convert;

         } else {
            return 'Arguement Error';

         }
         break;

      default:
         return 'Arguement Error';
         break;
   }

}

/*TIME CONVERTER*/

function time_converter($value, $fromUnit, $toUnit)
{
   switch ($fromUnit) {
      case 'ms': //from milli seconds
         if ($toUnit == 's') {
            //to seconds
            $convert = $value / 1000;
            return $convert;
         } else if ($toUnit == 'min') {
            //to minutes
            $convert = $value / 60000;
            return $convert;
         } else if ($toUnit == 'hr') {
            //to hours
            $convert = $value / 3600000;
            return $convert;
         } else if ($toUnit == 'day') {
//to days
            $convert = $value / 86400000;
            return $convert;
         } else if ($toUnit == 'week') {
//to weeks
            $convert = $value / 604800000;
            return $convert;
         } else if ($toUnit == 'month') {
//to month
            $convert = $value / 2628000000;
            return $convert;
         } else if ($toUnit == 'yr') {
//to year
            $convert = $value / 31540000000;
            return $convert;
         } else if ($toUnit == 'dec') {
//to decade
            $convert = $value / 315400000000;
            return $convert;
         } else if ($toUnit == 'cen') {
//to century
            $convert = $value / 3154000000000;
            return $convert;
         } else {
            return "Arguement Error";
         }
         break;

      case 's': //from seconds
         if ($toUnit == 'ms') {
            //to milli seconds
            $convert = $value * 1000;
            return $convert;
         }

         if ($toUnit == 'week') {
            //to weeks
            $convert = $value / 604800;
            return $convert;
         } else if ($toUnit == 'm') {
            //to minutes
            $convert = $value / 60;
            return $convert;
         } else if ($toUnit == 'hr') {
            //to hours
            $convert = $value / 3600;
            return $convert;
         } else if ($toUnit == 'month') {
            //to months
            $convert = $value / 2628000;
            return $convert;
         } else if ($toUnit == 'day') {
            //to days
            $convert = $value / 86400;
            return $convert;
         } else if ($toUnit == 'yr') {
            //to years
            $convert = $value / 31540000;
            return $convert;
         } else if ($toUnit == 'dec') {
            //to decade
            $convert = $value / 315400000;
            return $convert;
         } else if ($toUnit == 'cen') {
            //to century
            $convert = $value / 315400000;
            return $convert;
         } else {
            return "Arguement Error";
         }

         break;

      case 'min': //from minute
         if ($toUnit == 'ms') {
            //to weeks
            $convert = $value * 60000;
            return $convert;
         }

         if ($toUnit == 'week') {
            //to weeks
            $convert = $value / 10080;
            return $convert;
         } else if ($toUnit == 's') {
            //to seconds
            $convert = $value * 60;
            return $convert;
         } else if ($toUnit == 'hr') {
            //to hours
            $convert = $value / 60;
            return $convert;
         } else if ($toUnit == 'month') {
            //to months
            $convert = $value / 43800;
            return $convert;
         } else if ($toUnit == 'day') {
            //to days
            $convert = $value / 1440;
            return $convert;
         } else if ($toUnit == 'yr') {
            //years
            $convert = $value / 525600;
            return $convert;
         } else if ($toUnit == 'dec') {
            //to decade
            $convert = $value / 5256000;
            return $convert;
         } else if ($toUnit == 'cen') {
            //to century
            $convert = $value / 5256000;
            return $convert;
         } else {
            return "Arguement Error";
         }

         break;

      case 'hr':
         if ($toUnit == 's') {
            //to seconds
            $convert = $value / 3600;
            return $convert;
         } else if ($toUnit == 'month') {
            //to minutes
            $convert = $value / 60;
            return $convert;
         } else if ($toUnit == 'ms') {
            //to milli sec
            $convert = $value / 3600000;
            return $convert;
         } else if ($toUnit == 'day') {
//days
            $convert = $value / 24;
            return $convert;
         } else if ($toUnit == 'w') {
//to weeks
            $convert = $value / 168;
            return $convert;
         } else if ($toUnit == 'month') {
//to month
            $convert = $value / 730;
            return $convert;
         } else if ($toUnit == 'yr') {
//to year
            $convert = $value / 8760;
            return $convert;
         } else if ($toUnit == 'dec') {
//to decade
            $convert = $value / 87600;
            return $convert;
         } else if ($toUnit == 'cen') {
//to century
            $convert = $value / 876000;
            return $convert;
         } else {
            return "Arguement Error";
         }
         break;

      case 'day': //from day
         if ($toUnit == 's') {
            //to seconds
            $convert = $value * 86400;
            return $convert;
         } else if ($toUnit == 'min') {
            //to minutes
            $convert = $value * 1440;
            return $convert;
         } else if ($toUnit == 'ms') {
            //to milli sec
            $convert = $value * 86400000;
            return $convert;
         } else if ($toUnit == 'hr') {
//to hour
            $convert = $value / 24;
            return $convert;
         } else if ($toUnit == 'week') {
//to weeks
            $convert = $value / 7;
            return $convert;
         } else if ($toUnit == 'month') {
//to month
            $convert = $value / 30.417;
            return $convert;
         } else if ($toUnit == 'yr') {
//to year
            $convert = $value / 365;
            return $convert;
         } else if ($toUnit == 'dec') {
//to decade
            $convert = $value / 3650;
            return $convert;
         } else if ($fromUnit == 'cen') {
//to century
            $convert = $value / 36500;
            return $convert;
         } else {
            return "Arguement Error";
         }
         break;

      case 'week': //from week
         if ($toUnit == 's') {
            // to seconds
            $convert = $value * 604800;
            return $convert;
         } else if ($toUnit == 'min') {
            //to minutes
            $convert = $value * 10080;
            return $convert;
         } else if ($toUnit == 'hr') {
            //to hours
            $convert = $value * 168;
            return $convert;
         } else if ($toUnit == 'day') {
//to days
            $convert = $value * 7;
            return $convert;
         } else if ($toUnit == 'ms') {
//to milli sec
            $convert = $value * 604800000;
            return $convert;
         } else if ($toUnit == 'month') {
//to month
            $convert = $value / 4.345;
            return $convert;
         } else if ($toUnit == 'yr') {
//to year
            $convert = $value / 52.143;
            return $convert;
         } else if ($toUnit == 'dec') {
//to decade
            $convert = $value / 521;
            return $convert;
         } else if ($toUnit == 'cen') {
//to century
            $convert = $value / 5214;
            return $convert;
         } else {
            return "Arguement Error";
         }
         break;

      case 'month': //from month
         if ($toUnit == 's') {
            //to seconds
            $convert = $value * 2628000;
            return $convert;
         } else if ($toUnit == 'min') {
            //to minutes
            $convert = $value * 43800;
            return $convert;
         } else if ($toUnit == 'hr') {
            //to hours
            $convert = $value * 730;
            return $convert;

         } else if ($toUnit == 'day') {
//to days
            $convert = $value * 30.417;
            return $convert;
         } else if ($toUnit == 'week') {
//to weeks
            $convert = $value * 4.345;
            return $convert;
         } else if ($toUnit == 'ms') {
//to milli sec
            $convert = $value * 2628000000;
            return $convert;
         } else if ($toUnit == 'yr') {
//to yr
            $convert = $value / 12;
            return $convert;
         } else if ($toUnit == 'dec') {
// to decade
            $convert = $value / 120;
            return $convert;
         } else if ($toUnit == 'cen') {
//to century
            $convert = $value / 1200;
            return $convert;
         } else {
            return "Arguement Error";
         }
         break;

      case 'yr': //from year
         if ($toUnit == 's') {
            //seconds
            $convert = $value * 31540000;
            return $convert;
         } else if ($toUnit == 'min') {
            //to minutes
            $convert = $value * 525600;
            return $convert;
         } else if ($toUnit == 'hr') {
            //to hours
            $convert = $value * 8760;
            return $convert;
         } else if ($toUnit == 'day') {
//to days
            $convert = $value * 365;
            return $convert;
         } else if ($toUnit == 'week') {
//to weeks
            $convert = $value * 52.143;
            return $convert;
         } else if ($toUnit == 'month') {
//to month
            $convert = $value * 12;
            return $convert;
         } else if ($toUnit == 'ms') {
//to milli sec
            $convert = $value * 31540000000;
            return $convert;
         } else if ($toUnit == 'dec') {
//to decade
            $todec = $value / 10;
            return $todec;
         } else if ($toUnit == 'c') {
//to century
            $convert = $value / 100;
            return $convert;
         } else {
            return "Arguement Error";
         }
         break;

      case 'dec': // from decade
         if ($toUnit == 's') {
            //to seconds
            $convert = $value * 315400000;
            return $convert;
         } else if ($toUnit == 'min') {
            //to minutes
            $convert = $value * 5256000;
            return $convert;
         } else if ($toUnit == 'hr') {
            //to hours
            $convert = $value * 87600;
            return $convert;
         } else if ($toUnit == 'day') {
//to days
            $convert = $value * 3650;
            return $convert;
         } else if ($toUnit == 'week') {
//to weeks
            $convert = $value * 521;
            return $convert;
         } else if ($toUnit == 'month') {
//to month
            $convert = $value * 120;
            return $convert;
         } else if ($toUnit == 'ms') {
//to milli sec
            $convert = $value * 315400000000;
            return $convert;
         } else if ($toUnit == 'yr') {
//to yr
            $todec = $value * 10;
            return $todec;
         } else if ($toUnit == 'c') {
//to century
            $convert = $value / 10;
            return $convert;
         } else {
            return "Arguement Error";
         }
         break;

      case 'cen': //from centuary
         if ($toUnit == 's') {
            //to seconds
            $convert = $value * 3154000000;
            return $convert;
         } else if ($toUnit == 'min') {
            //to minutes
            $convert = $value * 52560000;
            return $convert;
         } else if ($toUnit == 'hr') {
            //to hours
            $convert = $value * 876000;
            return $convert;
         } else if ($toUnit == 'day') {
//to days
            $convert = $value * 36500;
            return $convert;
         } else if ($toUnit == 'week') {
//to weeks
            $convert = $value * 5214;
            return $convert;
         } else if ($toUnit == 'month') {
//to month
            $convert = $value * 1200;
            return $convert;
         } else if ($toUnit == 'ms') {
//to milli sec
            $convert = $value * 3154000000000;
            return $convert;
         } else if ($toUnit == 'yr') {
//to yr
            $todec = $value * 1200;
            return $todec;
         } else if ($toUnit == 'dec') {
//to decade
            $convert = $value * 100;
            return $convert;
         } else {
            return "Arguement Error";
         }
         break;

      default:
         return 'Arguement Error';
         break;
   }

}

function volume_converter($value, $fromUnit, $toUnit)
{

   switch ($fromUnit) {
      case 'l': //from litres
         if ($toUnit == 'oz') {
            //to fliud ounces
            $convert = $value / 1.137;
            return $convert;
         } else if ($toUnit == 'ml') {
            //to milli litre
            $convert = $value * 1000;
            return $convert;
         } else if ($toUnit == 'gal') {
            //to gallons
            $convert = $value / 4.546;
            return $convert;
         } else if ($toUnit == 'ft3') {
            //to cubic ft
            $convert = $value * 61.024;
            return $convert;
         } else if ($toUnit == 'in3') {
            //to cubic inch
            $convert = $value / 10000;
            return $convert;
         } else if ($toUnit == 'm3') {
            //to cubic meters
            $convert = $value / 1000;
            return $convert;
         } else if ($toUnit == 'cm3') {
            //to  cubic centimetre
            $convert = $value * 1000;
            return $convert;
         } else {
            return 'Arguement Error';
         }

         break;

      case 'm3': //from cubic meters
         if ($toUnit == 'oz') {
            //to fliud ounces
            $convert = $value * 33814;
            return $convert;
         } else if ($toUnit == 'ml') {
            //to milli litre
            $convert = $value * 1000000;
            return $convert;
         } else if ($toUnit == 'gal') {
            //to gallons
            $convert = $value * 254;
            return $convert;
         } else if ($toUnit == 'ft3') {
            //to cubic ft
            $convert = $value * 35.315;
            return $convert;
         } else if ($toUnit == 'in3') {
            //to cubic inch
            $convert = $value * 61024;
            return $convert;
         } else if ($toUnit == 'l') {
            //to  litres
            $convert = $value * 1000;
            return $convert;
         } else if ($toUnit == 'cm3') {
            //to  cubic centimetre
            $convert = $value * 1000000;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'ml': //from milli litres
         if ($toUnit == 'oz') {
            //to fliud ounces
            $convert = $value / 29.574;
            return $convert;
         } else if ($toUnit == 'ml') {
            //to milli litre
            $convert = $value / 1000000;
            return $convert;
         } else if ($toUnit == 'gal') {
            //to gallons
            $convert = $value / 4546;
            return $convert;
         } else if ($toUnit == 'ft3') {
            //to cubic ft
            $convert = $value / 28317;
            return $convert;
         } else if ($toUnit == 'in3') {
            //to cubic inch
            $convert = $value / 16.387;
            return $convert;
         } else if ($toUnit == 'l') {
            //to  litres
            $convert = $value / 1000;
            return $convert;
         } else if ($toUnit == 'cm3') {
            //to  cubic centimetre
            $convert = $value * 1;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'gal': //from gallons
         if ($toUnit == 'oz') {
            //to fliud ounces
            $convert = $value * 154;
            return $convert;
         } else if ($toUnit == 'ml') {
            //to milli litre
            $convert = $value * 4546;
            return $convert;
         } else if ($toUnit == 'm3') {
            //to cubic metre
            $convert = $value / 220;
            return $convert;
         } else if ($toUnit == 'ft3') {
            //to cubic ft
            $convert = $value / 6.229;
            return $convert;
         } else if ($toUnit == 'in3') {
            //to cubic inch
            $convert = $value * 277;
            return $convert;
         } else if ($toUnit == 'l') {
            //to  litres
            $convert = $value * 4.546;
            return $convert;
         } else if ($toUnit == 'cm3') {
            //to  cubic centimetre
            $convert = $value * 4546;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'oz': //from fliud ounces
         if ($toUnit == 'm3') {
            //to cubic meters
            $convert = $value / 33814;
            return $convert;
         } else if ($toUnit == 'ml') {
            //to milli litre
            $convert = $value * 29.574;
            return $convert;
         } else if ($toUnit == 'gal') {
            //to gallons
            $convert = $value / 154;
            return $convert;
         } else if ($toUnit == 'ft3') {
            //to cubic ft
            $convert = $value / 958;
            return $convert;
         } else if ($toUnit == 'in3') {
            //to cubic inch
            $convert = $value * 1.805;
            return $convert;
         } else if ($toUnit == 'l') {
            //to  litres
            $convert = $value / 33.814;
            return $convert;
         } else if ($toUnit == 'cm3') {
            //to  cubic centimetre
            $convert = $value * 29.574;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'in3': //from cubic inch
         if ($toUnit == 'oz') {
            //to fliud ounces
            $convert = $value / 1.805;
            return $convert;
         } else if ($toUnit == 'ml') {
            //to milli litre
            $convert = $value * 16.387;
            return $convert;
         } else if ($toUnit == 'gal') {
            //to gallons
            $convert = $value / 277;
            return $convert;
         } else if ($toUnit == 'ft3') {
            //to cubic ft
            $convert = $value / 1728;
            return $convert;
         } else if ($toUnit == 'm3') {
            //to cubic metre
            $convert = $value / 61024;
            return $convert;
         } else if ($toUnit == 'l') {
            //to  litres
            $convert = $value / 61.024;
            return $convert;
         } else if ($toUnit == 'cm3') {
            //to  cubic centimetre
            $convert = $value * 16.387;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'ft3': //from cubic foot
         if ($toUnit == 'oz') {
            //to fliud ounces
            $convert = $value * 958;
            return $convert;
         } else if ($toUnit == 'ml') {
            //to milli litre
            $convert = $value * 28317;
            return $convert;
         } else if ($toUnit == 'gal') {
            //to gallons
            $convert = $value * 6.229;
            return $convert;
         } else if ($toUnit == 'm3') {
            //to cubic metre
            $convert = $value / 35.315;
            return $convert;
         } else if ($toUnit == 'in3') {
            //to cubic inch
            $convert = $value * 1728;
            return $convert;
         } else if ($toUnit == 'l') {
            //to  litres
            $convert = $value * 28.317;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'cm3': //from cubic centimetres
         if ($toUnit == 'oz') {
            //to fliud ounces
            $convert = $value / 29.574;
            return $convert;
         } else if ($toUnit == 'ml') {
            //to milli litre
            $convert = $value * 1;
            return $convert;
         } else if ($toUnit == 'gal') {
            //to gallons
            $convert = $value * 4546;
            return $convert;
         } else if ($toUnit == 'm3') {
            //to cubic metre
            $convert = $value * 1000000;
            return $convert;
         } else if ($toUnit == 'in3') {
            //to cubic inch
            $convert = $value * 16.387;
            return $convert;
         } else if ($toUnit == 'l') {
            //to  litres
            $convert = $value / 1000;
            return $convert;
         } else if ($toUnit == 'ft') {
            //to  ft
            $convert = $value / 283317;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      default:
         return 'Arguement Error';
         break;
   }
}

/* SPEED CONVERTER */

function speed_converter($value, $fromUnit, $toUnit)
{

   switch ($fromUnit) {
      case 'mps': //from metres per seconds
         if ($toUnit == 'kph') {
            //to km per hr
            $convert = $value * 3.6;
            return $convert;
         } else if ($toUnit == 'knots') {
            //to knots
            $convert = $value * 1.944;
            return $convert;
         } else if ($toUnit == 'mph') {
            //to miles per hr
            $convert = $value * 2.237;
            return $convert;
         } else {
            return 'Arguement Error';
         }

         break;

      case 'kph': //from km per hr
         if ($toUnit == 'mps') {
            //to metre per sec
            $convert = $value / 3.6;
            return $convert;
         } else if ($toUnit == 'knots') {
            //to knots
            $convert = $value * 1.852;
            return $convert;
         } else if ($toUnit == 'mph') {
            //to miles per hr
            $convert = $value / 1.609;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'mph': //from miles per hr
         if ($toUnit == 'kph') {
            //to km per hr
            $convert = $value * 1.609;
            return $convert;
         } else if ($toUnit == 'knots') {
            //to knots
            $convert = $value / 1.151;
            return $convert;
         } else if ($toUnit == 'mps') {
            //to metres per sec
            $convert = $value / 2.237;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'knots': //from knots
         if ($toUnit == 'kph') {
            //to km per hr
            $convert = $value * 1.852;
            return $convert;
         } else if ($toUnit == 'mps') {
            //to metre per sec
            $convert = $value / 1.944;
            return $convert;
         } else if ($toUnit == 'mph') {
            //to miles per hr
            $convert = $value * 1.151;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      default:
         # code...
         break;
   }

}

function length_converter($value, $fromUnit, $toUnit)
{
   switch ($fromUnit) {
      case 'km': //from kili metre
         if ($toUnit == 'm') {
            //to metres
            $convert = $value * 1000;
            return $convert;
         } else if ($toUnit == 'cm') {
            //to centi metres
            $convert = $value * 100000;
            return $convert;
         } else if ($toUnit == 'mm') {
            //to mili metres
            $convert = $value * 1000000;
            return $convert;
         } else if ($toUnit == 'um') {
            //to micro metre
            $convert = $value * 1000000000;
            return $convert;
         } else if ($toUnit == 'nm') {
            //to nano meter
            $convert = $value * 1000000000000;
            return $convert;
         } else if ($toUnit == 'mi') {
            //to miles
            $convert = $value / 1.609;
            return $convert;
         } else if ($toUnit == 'yd') {
            //to yards
            $convert = $value * 1094;
            return $convert;
         } else if ($toUnit == 'ft') {
            //to foot
            $convert = $value * 3281;
            return $convert;
         } else if ($toUnit == 'in') {
            //to inch
            $convert = $value * 39370;
            return $convert;
         } else {
            return 'Arguement Error';
         }

         break;

      case 'm': //from metres
         if ($toUnit == 'km') {
            //to kilo metres
            $convert = $value / 1000;
            return $convert;
         } else if ($toUnit == 'cm') {
            //to centi metres
            $convert = $value * 100;
            return $convert;
         } else if ($toUnit == 'mm') {
            //to mili metres
            $convert = $value * 1000;
            return $convert;
         } else if ($toUnit == 'um') {
            //to micro metre
            $convert = $value * 1000000;
            return $convert;
         } else if ($toUnit == 'nm') {
            //to nano meter
            $convert = $value * 1000000000;
            return $convert;
         } else if ($toUnit == 'mi') {
            //to miles
            $convert = $value / 1609;
            return $convert;
         } else if ($toUnit == 'yd') {
            //to yards
            $convert = $value * 1.094;
            return $convert;
         } else if ($toUnit == 'ft') {
            //to foot
            $convert = $value * 3.281;
            return $convert;
         } else if ($toUnit == 'in') {
            //to inch
            $convert = $value * 39.37;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'cm': //from centi metres
         if ($toUnit == 'm') {
            //to metres
            $convert = $value / 100;
            return $convert;
         } else if ($toUnit == 'km') {
            //to kilo metres
            $convert = $value / 100000;
            return $convert;
         } else if ($toUnit == 'mm') {
            //to mili metres
            $convert = $value / 10;
            return $convert;
         } else if ($toUnit == 'um') {
            //to micro metre
            $convert = $value * 10000;
            return $convert;
         } else if ($toUnit == 'nm') {
            //to nano meter
            $convert = $value * 10000000;
            return $convert;
         } else if ($toUnit == 'mi') {
            //to miles
            $convert = $value / 160934;
            return $convert;
         } else if ($toUnit == 'yd') {
            //to yards
            $convert = $value / 91.44;
            return $convert;
         } else if ($toUnit == 'ft') {
            //to foot
            $convert = $value / 30.48;
            return $convert;
         } else if ($toUnit == 'in') {
            //to inch
            $convert = $value / 2.54;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'mm': //from milli metres
         if ($toUnit == 'm') {
            //to metres
            $convert = $value / 1000;
            return $convert;
         } else if ($toUnit == 'cm') {
            //to centi metres
            $convert = $value / 10;
            return $convert;
         } else if ($toUnit == 'km') {
            //to kilo metres
            $convert = $value / 1000000;
            return $convert;
         } else if ($toUnit == 'um') {
            //to micro metre
            $convert = $value * 1000;
            return $convert;
         } else if ($toUnit == 'nm') {
            //to nano meter
            $convert = $value * 1000000;
            return $convert;
         } else if ($toUnit == 'mi') {
            //to miles
            $convert = $value / 1609000;
            return $convert;
         } else if ($toUnit == 'yd') {
            //to yards
            $convert = $value / 194;
            return $convert;
         } else if ($toUnit == 'ft') {
            //to foot
            $convert = $value / 305;
            return $convert;
         } else if ($toUnit == 'in') {
            //to inch
            $convert = $value / 25.4;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'um': //from micro metre
         if ($toUnit == 'm') {
            //to metres
            $convert = $value / 1000000;
            return $convert;
         } else if ($toUnit == 'cm') {
            //to centi metres
            $convert = $value / 10000;
            return $convert;
         } else if ($toUnit == 'mm') {
            //to mili metres
            $convert = $value / 1000;
            return $convert;
         } else if ($toUnit == 'km') {
            //to kilo metre
            $convert = $value / 1000000000;
            return $convert;
         } else if ($toUnit == 'nm') {
            //to nano meter
            $convert = $value * 1000;
            return $convert;
         } else if ($toUnit == 'mi') {
            //to miles
            $convert = $value / 1609000000;
            return $convert;
         } else if ($toUnit == 'yd') {
            //to yards
            $convert = $value / 914400;
            return $convert;
         } else if ($toUnit == 'ft') {
            //to foot
            $convert = $value / 304800;
            return $convert;
         } else if ($toUnit == 'in') {
            //to inch
            $convert = $value / 25400;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'nm': //from nano metre
         if ($toUnit == 'm') {
            //to metres
            $convert = $value / 1000;
            return $convert;
         } else if ($toUnit == 'cm') {
            //to centi metres
            $convert = $value / 10000000;
            return $convert;
         } else if ($toUnit == 'mm') {
            //to mili metres
            $convert = $value / 1000000;
            return $convert;
         } else if ($toUnit == 'um') {
            //to micro metre
            $convert = $value / 1000;
            return $convert;
         } else if ($toUnit == 'km') {
            //to kilo meter
            $convert = $value / 1000000000000;
            return $convert;
         } else if ($toUnit == 'mi') {
            //to miles
            $convert = $value / 1609000000000;
            return $convert;
         } else if ($toUnit == 'yd') {
            //to yards
            $convert = $value / 914400000;
            return $convert;
         } else if ($toUnit == 'ft') {
            //to foot
            $convert = $value / 304800000;
            return $convert;
         } else if ($toUnit == 'in') {
            //to inch
            $convert = $value / 25400000;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'mi': //from miles
         if ($toUnit == 'm') {
            //to metres
            $convert = $value * 1609;
            return $convert;
         } else if ($toUnit == 'cm') {
            //to centi metres
            $convert = $value * 160934;
            return $convert;
         } else if ($toUnit == 'mm') {
            //to mili metres
            $convert = $value * 1609000;
            return $convert;
         } else if ($toUnit == 'um') {
            //to micro metre
            $convert = $value * 1609000000;
            return $convert;
         } else if ($toUnit == 'nm') {
            //to nano meter
            $convert = $value * 1609000000000;
            return $convert;
         } else if ($toUnit == 'km') {
            //to km
            $convert = $value * 1.609;
            return $convert;
         } else if ($toUnit == 'yd') {
            //to yards
            $convert = $value * 1760;
            return $convert;
         } else if ($toUnit == 'ft') {
            //to foot
            $convert = $value * 5280;
            return $convert;
         } else if ($toUnit == 'in') {
            //to inch
            $convert = $value * 63360;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'yd':
         if ($toUnit == 'm') {
            //to metres
            $convert = $value / 1.094;
            return $convert;
         } else if ($toUnit == 'cm') {
            //to centi metres
            $convert = $value * 91.44;
            return $convert;
         } else if ($toUnit == 'mm') {
            //to mili metres
            $convert = $value * 914;
            return $convert;
         } else if ($toUnit == 'um') {
            //to micro metre
            $convert = $value * 914400;
            return $convert;
         } else if ($toUnit == 'nm') {
            //to nano meter
            $convert = $value * 914400000;
            return $convert;
         } else if ($toUnit == 'mi') {
            //to miles
            $convert = $value / 1760;
            return $convert;
         } else if ($toUnit == 'km') {
            //to km
            $convert = $value / 1094;
            return $convert;
         } else if ($toUnit == 'ft') {
            //to foot
            $convert = $value * 3;
            return $convert;
         } else if ($toUnit == 'in') {
            //to inch
            $convert = $value * 36;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'ft': //from foot
         if ($toUnit == 'm') {
            //to metres
            $convert = $value / 3.281;
            return $convert;
         } else if ($toUnit == 'cm') {
            //to centi metres
            $convert = $value * 30.40;
            return $convert;
         } else if ($toUnit == 'mm') {
            //to mili metres
            $convert = $value * 305;
            return $convert;
         } else if ($toUnit == 'um') {
            //to micro metre
            $convert = $value * 304800;
            return $convert;
         } else if ($toUnit == 'nm') {
            //to nano meter
            $convert = $value * 304800000;
            return $convert;
         } else if ($toUnit == 'mi') {
            //to miles
            $convert = $value / 5280;
            return $convert;
         } else if ($toUnit == 'yd') {
            //to yards
            $convert = $value / 3;
            return $convert;
         } else if ($toUnit == 'km') {
            //to kilo metre
            $convert = $value / 3281;
            return $convert;
         } else if ($toUnit == 'in') {
            //to inch
            $convert = $value * 12;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'in':
         if ($toUnit == 'm') {
            //to metres
            $convert = $value / 39.37;
            return $convert;
         } else if ($toUnit == 'cm') {
            //to centi metres
            $convert = $value * 2.54;
            return $convert;
         } else if ($toUnit == 'mm') {
            //to mili metres
            $convert = $value * 25.4;
            return $convert;
         } else if ($toUnit == 'um') {
            //to micro metre
            $convert = $value * 25400;
            return $convert;
         } else if ($toUnit == 'nm') {
            //to nano meter
            $convert = $value * 25400000;
            return $convert;
         } else if ($toUnit == 'mi') {
            //to miles
            $convert = $value / 63360;
            return $convert;
         } else if ($toUnit == 'yd') {
            //to yards
            $convert = $value / 36;
            return $convert;
         } else if ($toUnit == 'ft') {
            //to foot
            $convert = $value * 12;
            return $convert;
         } else if ($toUnit == 'km') {
            //to kilo metre
            $convert = $value / 39370;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      default:
         return 'Arguement Error';
         break;
   }

}

function pressure_converter($value, $fromUnit, $toUnit)
{
   switch ($fromUnit) {
      case 'pa': //from pascal
         if ($toUnit == 'kpa') {
            //to kilo pa
            $convert = $value / 1000;
            return $convert;
         } else if ($toUnit == 'mpa') {
            //to milli pa
            $convert = $value / 1000000;
            return $convert;
         } else if ($toUnit == 'bar') {
            //to bar
            $convert = $value / 100000;
            return $convert;
         } else if ($toUnit == 'mbar') {
            //to milli bar
            $convert = $value / 100;
            return $convert;
         } else if ($toUnit == 'psi') {
            //to pounds per square inch
            $convert = $value / 6895;
            return $convert;
         } else {
            return 'Arguement Error';
         }

         break;

      case 'kpa':
         if ($toUnit == 'pa') {
            //to pascal
            $convert = $value * 1000;
            return $convert;
         } else if ($toUnit == 'mpa') {
            //to milli pa
            $convert = $value / 1000000;
            return $convert;
         } else if ($toUnit == 'bar') {
            //to bar
            $convert = $value / 100;
            return $convert;
         } else if ($toUnit == 'mbar') {
            //to milli bar
            $convert = $value * 10;
            return $convert;
         } else if ($toUnit == 'psi') {
            //to pounds per square inch
            $convert = $value / 6.895;
            return $convert;
         } else {
            return 'Arguement Error';
         }

         break;

      case 'mpa': //milli pascal
         if ($toUnit == 'pa') {
            //to pascal
            $convert = $value / 1000;
            return $convert;
         } else if ($toUnit == 'kpa') {
            //to killo paacal
            $convert = $value / 1000000;
            return $convert;
         } else if ($toUnit == 'bar') {
            //to bar
            $convert = $value / 100000000;
            return $convert;
         } else if ($toUnit == 'mbar') {
            //to milli bar
            $convert = $value * 100000;
            return $convert;
         } else if ($toUnit == 'psi') {
            //to pounds per square inch
            $convert = $value * 145.0377;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'bar':
         if ($toUnit == 'pa') {
            //to pascal
            $convert = $value * 100000;
            return $convert;
         } else if ($toUnit == 'kpa') {
            //to killo paacal
            $convert = $value * 100;
            return $convert;
         } else if ($toUnit == 'mpa') {
            //to mega pascal
            $convert = $value / 10;
            return $convert;
         } else if ($toUnit == 'mbar') {
            //to milli bar
            $convert = $value * 1000;
            return $convert;
         } else if ($toUnit == 'psi') {
            //to pounds per square inch
            $convert = $value * 14.504;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'mbar':
         if ($toUnit == 'pa') {
            //to pascal
            $convert = $value * 100;
            return $convert;
         } else if ($toUnit == 'kpa') {
            //to killo paacal
            $convert = $value / 10;
            return $convert;
         } else if ($toUnit == 'mpa') {
            //to mega pascal
            $convert = $value / 10;
            return $convert;
         } else if ($toUnit == 'bar') {
            //to  bar
            $convert = $value / 1000;
            return $convert;
         } else if ($toUnit == 'psi') {
            //to pounds per square inch
            $convert = $value / 68.948;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'psi':
         if ($toUnit == 'pa') {
            //to pascal
            $convert = $value * 6.895;
            return $convert;
         } else if ($toUnit == 'kpa') {
            //to killo paacal
            $convert = $value / 6.895;
            return $convert;
         } else if ($toUnit == 'mpa') {
            //to mega pascal
            $convert = $value / 10000;
            return $convert;
         } else if ($toUnit == 'mbar') {
            //to milli bar
            $convert = $value * 68.948;
            return $convert;
         } else if ($toUnit == 'bar') {
            //to  bar
            $convert = $value / 14.504;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      default:
         return 'Arguement Error';
         break;
   }

}

function mass_converter($value, $fromUnit, $toUnit)
{
   switch ($fromUnit) {
      case 'kg': //from kilo gram
         if ($toUnit == 'g') {
            //to gram
            $convert = $value * 1000;
            return $convert;
         } else if ($toUnit == 'lb') {
            //to pounds
            $convert = $value * 2.205;
            return $convert;
         } else if ($toUnit == 'mg') {
            //to millli grams
            $convert = $value * 1000000;
            return $convert;
         } else if ($toUnit == 't') {
            //to tonnes
            $convert = $value / 1000;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'g': //from grams
         if ($toUnit == 'kg') {
            //to killo gram
            $convert = $value / 1000;
            return $convert;
         } else if ($toUnit == 'lb') {
            //to pounds
            $convert = $value / 454;
            return $convert;
         } else if ($toUnit == 'mg') {
            //to millli grams
            $convert = $value * 1000;
            return $convert;
         } else if ($toUnit == 't') {
            //to tonnes
            $convert = $value / 1000000;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'lb': //from pounds
         if ($toUnit == 'g') {
            //to gram
            $convert = $value * 454;
            return $convert;
         } else if ($toUnit == 'kg') {
            //to killo gram
            $convert = $value / 2.205;
            return $convert;
         } else if ($toUnit == 'mg') {
            //to millli grams
            $convert = $value * 453592;
            return $convert;
         } else if ($toUnit == 't') {
            //to tonnes
            $convert = $value / 2205;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'mg': //from milli gram
         if ($toUnit == 'g') {
            //to gram
            $convert = $value / 1000;
            return $convert;
         } else if ($toUnit == 'lb') {
            //to pounds
            $convert = $value / 453592;
            return $convert;
         } else if ($toUnit == 'kg') {
            //to killo grams
            $convert = $value / 1000000;
            return $convert;
         } else if ($toUnit == 't') {
            //to tonnes
            $convert = $value / 1000000000;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 't':
         if ($toUnit == 'g') {
            //to gram
            $convert = $value / 1000000000;
            return $convert;
         } else if ($toUnit == 'lb') {
            //to pounds
            $convert = $value * 2205;
            return $convert;
         } else if ($toUnit == 'mg') {
            //to millli grams
            $convert = $value * 1000000000;
            return $convert;
         } else if ($toUnit == 'kg') {
            //to kilo gram
            $convert = $value * 1000;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      default:
         return 'Arguement Error';
         break;
   }

}

/* FREQUENCY CONVERTER*/

function frequency_converter($value, $fromUnit, $toUnit)
{
   switch ($fromUnit) {
      case 'hz': // from hertz
         if ($toUnit == 'khz') {
            //to kilo hertz
            $convert = $value / 1000;
            return $convert;
         } else if ($toUnit == 'mhz') {
            //to mega hertz
            $convert = $value / 1000000;
            return $convert;
         } else if ($toUnit == 'ghz') {
            //to giga hertz
            $convert = $value / 1000000000;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'khz': // from kilo hertz
         if ($toUnit == 'hz') {
            //to hertz
            $convert = $value / 1000000;
            return $convert;
         } else if ($toUnit == 'mhz') {
            //to mega hertz
            $convert = $value * 1000;
            return $convert;
         } else if ($toUnit == 'ghz') {
            //to giga hertz
            $convert = $value / 100000;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'mhz':
         if ($toUnit == 'khz') {
            //to kilo hertz
            $convert = $value * 1000;
            return $convert;
         } else if ($toUnit == 'hz') {
            //to  hertz
            $convert = $value * 1000000;
            return $convert;
         } else if ($toUnit == 'ghz') {
            //to giga hertz
            $convert = $value / 1000;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'ghz':
         if ($toUnit == 'khz') {
            //to kilo hertz
            $convert = $value * 1000000;
            return $convert;
         } else if ($toUnit == 'mhz') {
            //to mega hertz
            $convert = $value / 1000;
            return $convert;
         } else if ($toUnit == 'hz') {
            //to  hertz
            $convert = $value * 1000000000;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      default:
         return 'Arguement Error';
         break;
   }
}

/* ENERGY CONVERTER */

function energy_converter($value, $fromUnit, $toUnit)
{
   switch ($fromUnit) {
      case 'j': //from joules
         if ($toUnit == 'kj') {
            //to kilo joules
            $convert = $value / 1000;
            return $convert;
         } else if ($toUnit == 'gcal') {
            //to gram calorie
            $convert = $value / 4.184;
            return $convert;
         } else if ($toUnit == 'whr') {
            //to watt hr
            $convert = $value / 3600;
            return $convert;
         } else if ($toUnit == 'kwhr') {
            //to kilo watt hr
            $convert = $value / 36000000;
            return $convert;
         } else if ($toUnit == 'ev') {
            //to electronvolt
            $convert = $value * 6242000000000000000;
            return $convert;
         } else if ($toUnit == 'kcal') {
            //to killo calorie
            $convert = $value / 4184;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'kj': // from kilo joules
         if ($toUnit == 'j') {
            //to  joules
            $convert = $value * 1000;
            return $convert;
         } else if ($toUnit == 'gcal') {
            //to gram calorie
            $convert = $value * 239;
            return $convert;
         } else if ($toUnit == 'whr') {
            //to watt hr
            $convert = $value / 3.6;
            return $convert;
         } else if ($toUnit == 'kwhr') {
            //to kilo watt hr
            $convert = $value / 3600;
            return $convert;
         } else if ($toUnit == 'ev') {
            //to electronvolt
            $convert = $value * 6241500000000000000000;
            return $convert;
         } else if ($toUnit == 'kcal') {
            //to killo calorie
            $convert = $value / 4.184;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'gcal': //from gram calorie
         if ($toUnit == 'kj') {
            //to kilo joules
            $convert = $value / 239;
            return $convert;
         } else if ($toUnit == 'j') {
            //to  joules
            $convert = $value * 4.184;
            return $convert;
         } else if ($toUnit == 'whr') {
            //to watt hr
            $convert = $value / 860;
            return $convert;
         } else if ($toUnit == 'kwhr') {
            //to kilo watt hr
            $convert = $value / 860421;
            return $convert;
         } else if ($toUnit == 'ev') {
            //to electronvolt
            $convert = $value * 26130000000000000000;
            return $convert;
         } else if ($toUnit == 'kcal') {
            //to killo calorie
            $convert = $value / 1000;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'whr': //from watt hr
         if ($toUnit == 'kj') {
            //to kilo joules
            $convert = $value * 3.6;
            return $convert;
         } else if ($toUnit == 'gcal') {
            //to gram calorie
            $convert = $value * 860;
            return $convert;
         } else if ($toUnit == 'j') {
            //to joules
            $convert = $value * 3600;
            return $convert;
         } else if ($toUnit == 'kwhr') {
            //to kilo watt hr
            $convert = $value / 1000;
            return $convert;
         } else if ($toUnit == 'ev') {
            //to electronvolt
            $convert = $value * 22469000000000000000000;
            return $convert;
         } else if ($toUnit == 'kcal') {
            //to killo calorie
            $convert = $value / 1.162;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'kwhr':
         if ($toUnit == 'kj') {
            //to kilo joules
            $convert = $value * 1000;
            return $convert;
         } else if ($toUnit == 'gcal') {
            //to gram calorie
            $convert = $value * 860421;
            return $convert;
         } else if ($toUnit == 'whr') {
            //to watt hr
            $convert = $value * 1000;
            return $convert;
         } else if ($toUnit == 'j') {
            //to joules
            $convert = $value * 3600000;
            return $convert;
         } else if ($toUnit == 'ev') {
            //to electronvolt
            $convert = $value * 22469000000000000000000000;
            return $convert;
         } else if ($toUnit == 'kcal') {
            //to killo calorie
            $convert = $value * 860;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'ev':
         if ($toUnit == 'kj') {
            //to kilo joules
            $convert = $value * 0.000000000000000000000160218;
            return $convert;
         } else if ($toUnit == 'gcal') {
            //to gram calorie
            $convert = $value * 0.0000000000000000000382765;
            return $convert;
         } else if ($toUnit == 'whr') {
            //to watt hr
            $convert = $value * 0.0000000000000000000000044505;
            return $convert;
         } else if ($toUnit == 'kwhr') {
            //to kilo watt hr
            $convert = $value * 0.000000000000000000000000044505;
            return $convert;
         } else if ($toUnit == 'j') {
            //to joules
            $convert = $value / 0.0000000000000000062415;
            return $convert;
         } else if ($toUnit == 'kcal') {
            //to killo calorie
            $convert = $value * 0.000000000000000000000038293;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'kcal':
         if ($toUnit == 'kj') {
            //to kilo joules
            $convert = $value * 4.184;
            return $convert;
         } else if ($toUnit == 'gcal') {
            //to gram calorie
            $convert = $value * 1000;
            return $convert;
         } else if ($toUnit == 'whr') {
            //to watt hr
            $convert = $value * 1.162;
            return $convert;
         } else if ($toUnit == 'kwhr') {
            //to kilo watt hr
            $convert = $value / 860;
            return $convert;
         } else if ($toUnit == 'ev') {
            //to electronvolt
            $convert = $value * 2.6114000000000000000000;
            return $convert;
         } else if ($toUnit == 'j') {
            //to joules
            $convert = $value * 4184;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      default:
         return 'Arguement Error';
         break;
   }
}

/*  DIGITAL STORAGE */

function disk_storage($value, $fromUnit, $toUnit)
{
   switch ($fromUnit) {
      case 'bit': // from bit
         if ($toUnit == 'byte') {
            //to byte
            $convert = $value / 8;
            return $convert;
         } else if ($toUnit == 'kb') {
            //to kilobyte
            $convert = $value / 8000;
            return $convert;
         } else if ($toUnit == 'mb') {
            //to megabyte
            $convert = $value / 8000000;
            return $convert;
         } else if ($toUnit == 'gb') {
            //to gigabyte
            $convert = $value / 8000000000;
            return $convert;
         } else if ($toUnit == 'tb') {
            //to terabyte
            $convert = $value / 8000000000000;
            return $convert;
         } else if ($toUnit == 'pb') {
            //to petabyte
            $convert = $value / 8000000000000000;
            return $convert;
         } else {
            return 'Arguement Error';
         }

         break;

      case 'byte': //from byte
         if ($toUnit == 'bit') {
            //to bit
            $convert = $value * 8;
            return $convert;
         } else if ($toUnit == 'kb') {
            //to kilobyte
            $convert = $value / 1000;
            return $convert;
         } else if ($toUnit == 'mb') {
            //to megabyte
            $convert = $value / 1000000;
            return $convert;
         } else if ($toUnit == 'gb') {
            //to gigabyte
            $convert = $value / 1000000000;
            return $convert;
         } else if ($toUnit == 'tb') {
            //to terabyte
            $convert = $value / 1000000000000;
            return $convert;
         } else if ($toUnit == 'pb') {
            //to petabyte
            $convert = $value / 1000000000000000;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'kb': //from kilo byte
         if ($toUnit == 'byte') {
            //to byte
            $convert = $value * 1000;
            return $convert;
         } else if ($toUnit == 'bit') {
            //to bit
            $convert = $value * 8000;
            return $convert;
         } else if ($toUnit == 'mb') {
            //to megabyte
            $convert = $value / 125;
            return $convert;
         } else if ($toUnit == 'gb') {
            //to gigabyte
            $convert = $value / 125000;
            return $convert;
         } else if ($toUnit == 'tb') {
            //to terabyte
            $convert = $value / 1000000000;
            return $convert;
         } else if ($toUnit == 'pb') {
            //to petabyte
            $convert = $value / 1000000000000;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'mb':
         if ($toUnit == 'byte') {
            //to byte
            $convert = $value * 1000000;
            return $convert;
         } else if ($toUnit == 'kb') {
            //to kilobyte
            $convert = $value * 1000;
            return $convert;
         } else if ($toUnit == 'bit') {
            //to bit
            $convert = $value * 8000000;
            return $convert;
         } else if ($toUnit == 'gb') {
            //to gigabyte
            $convert = $value / 1074;
            return $convert;
         } else if ($toUnit == 'tb') {
            //to terabyte
            $convert = $value / 1000000;
            return $convert;
         } else if ($toUnit == 'pb') {
            //to petabyte
            $convert = $value / 1000000000;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'gb':
         if ($toUnit == 'byte') {
            //to byte
            $convert = $value * 1000000000;
            return $convert;
         } else if ($toUnit == 'kb') {
            //to kilobyte
            $convert = $value * 1000000;
            return $convert;
         } else if ($toUnit == 'mb') {
            //to megabyte
            $convert = $value * 1000;
            return $convert;
         } else if ($toUnit == 'bit') {
            //to bit
            $convert = $value * 8000000000;
            return $convert;
         } else if ($toUnit == 'tb') {
            //to terabyte
            $convert = $value / 1000;
            return $convert;
         } else if ($toUnit == 'pb') {
            //to petabyte
            $convert = $value / 1000000;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'tb':
         if ($toUnit == 'byte') {
            //to byte
            $convert = $value * 1000000000000;
            return $convert;
         } else if ($toUnit == 'kb') {
            //to kilobyte
            $convert = $value * 1000000000;
            return $convert;
         } else if ($toUnit == 'mb') {
            //to megabyte
            $convert = $value * 1000000;
            return $convert;
         } else if ($toUnit == 'gb') {
            //to gigabyte
            $convert = $value * 1000;
            return $convert;
         } else if ($toUnit == 'bit') {
            //to bit
            $convert = $value * 8000000000000;
            return $convert;
         } else if ($toUnit == 'pb') {
            //to petabyte
            $convert = $value / 1000;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'pb':
         if ($toUnit == 'byte') {
            //to byte
            $convert = $value * 1000000000000000;
            return $convert;
         } else if ($toUnit == 'kb') {
            //to kilobyte
            $convert = $value * 1000000000000;
            return $convert;
         } else if ($toUnit == 'mb') {
            //to megabyte
            $convert = $value * 1000000000;
            return $convert;
         } else if ($toUnit == 'gb') {
            //to gigabyte
            $convert = $value * 1000000;
            return $convert;
         } else if ($toUnit == 'tb') {
            //to terabyte
            $convert = $value * 1000;
            return $convert;
         } else if ($toUnit == 'bit') {
            //to bit
            $convert = $value * 8000000000000000;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      default:
         return 'Arguement Error';
         break;
   }

}
