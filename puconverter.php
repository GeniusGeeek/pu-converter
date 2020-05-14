<?php
############################################

/*
 *UNIT-CONVERTER LIBRARY  v1   by Gracious(graciousemmanuel52@gmail.com)
 *Open-Source Project
 */

#############################################

/*TEMPERATUR CONVERTER*/

function temperature_converter($x, $y, $z)
{
   switch ($y) {
      case 'f': //from fahrenheit
         if ($z == 'k') {
            //to kelvin
            $convert = ($x - 32) * 5 / 9 + 273;
            return $convert;
         } else if ($z == 'c') {
            //to celcius
            $convert = ($x - 32) * 5 / 9;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'k': //from kelvin
         if ($z == 'c') {
            //to celcius
            $convert = $x - 273;
            return $convert;
         } else if ($z == 'f') {
            //to fahrenheit
            $convert = ($x - 273) * 9 / 5 + 32;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'c': //from celius
         if ($z == 'f') {
            //to fahrenheir
            $convert = ($x * 9 / 5) + 32;
            return $convert;
         } else if ($z == 'k') {
//to kelvin
            $convert = $x + 273;
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

function area_converter($x, $y, $z)
{
   switch ($y) {
      case 'm2': //from sqr meter
         if ($z == 'km2') {
            //to sqr km
            $convert = $x / 1000000;
            return $convert;

         } else if ($z == 'mi2') {
            //to sqr miles
            $convert = $x / 2590000;
            return $convert;
         } else if ($z == 'yd2') {
            //to sqr yard
            $convert = $x * 1.196;
            return $convert;
         } else if ($z == 'ft2') {
            //to sqr ft
            $convert = $x * 10.764;
            return $convert;
         } else if ($z == 'in2') {
            //to sqr inch
            $convert = $x * 1550;
            return $convert;
         } else if ($z == 'ha') {
            //to sqr hectare
            $convert = $x * 10000;
            return $convert;
         } else if ($z == 'ac') {
            //to sqr acre
            $convert = $x / 4047;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'km2': //from km2
         if ($z == 'sM') {
            //to sqr m
            $convert = $x * 1000000;
            return $convert;

         } else if ($z == 'mi2') {
            //to sqr miles
            $convert = $x / 2.59;
            return $convert;
         } else if ($z == 'yd2') {
            //to sqr yard
            $convert = $x * 1.196000;
            return $convert;
         } else if ($z == 'ft2') {
            //to sqr ft
            $convert = $x * 1.0760000;
            return $convert;
         } else if ($z == 'in2') {
            //to sqr inch
            $convert = $x * 1.550000000;
            return $convert;
         } else if ($z == 'ha') {
            // to hectare
            $convert = $x * 100;
            return $convert;
         } else if ($z == 'ac') {
            // to acre
            $convert = $x * 247;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'ac': //from acre
         if ($z == 'ha') {
            //to hectare
            $convert = $x / 2.471;
            return $convert;
         } else if ($z == 'm2') {
            //to sqr m
            $convert = $x * 4047;
            return $convert;
         } else if ($z == 'km2') {
            //to sqr km
            $convert = $x / 247;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'ha': //from hactare
         if ($z == 'ac') {
            //to acre
            $convert = $x * 2.471;
            return $convert;
         } else if ($z == 'm2') {
            //to sqr m
            $convert = $x * 10000;
            return $convert;
         } else if ($z == 'km2') {
            //to sqr km
            $convert = $x / 100;
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

function angles_converter($x, $y, $z)
{
   switch ($y) {
      case 'deg': //from degree
         if ($z == 'rad') {
            //to radian
            $convert = $x * (3.142 / 180);
            return $convert;

         } else if ($z == 'grad') {
            //to gradian
            $convert = $x * (200 / 180);
            return $convert;

         } else {
            return 'Arguement Error';

         }
         break;

      case 'rad': //from radian
         if ($z == 'deg') {
//to degree
            $convert = $x * (180 / 3.142);
            return $convert;
         } else if ($z == 'grad') {
            //gradian
            $convert = $x * (200 / 3.142);
            return $convert;

         } else {
            return 'Arguement Error';

         }
         break;

      case 'grad': //from gradian
         if ($z == 'deg') {
//to degree
            $convert = $x * (180 / 200);
            return $convert;
         } else if ($z == 'rad') {
            //to rad
            $convert = $x * (3.142 / 200);
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

function time_converter($x, $y, $z)
{
   switch ($y) {
      case 'ms': //from milli seconds
         if ($z == 's') {
            //to seconds
            $convert = $x / 1000;
            return $convert;
         } else if ($z == 'min') {
            //to minutes
            $convert = $x / 60000;
            return $convert;
         } else if ($z == 'hr') {
            //to hours
            $convert = $x / 3600000;
            return $convert;
         } else if ($z == 'day') {
//to days
            $convert = $x / 86400000;
            return $convert;
         } else if ($z == 'week') {
//to weeks
            $convert = $x / 604800000;
            return $convert;
         } else if ($z == 'month') {
//to month
            $convert = $x / 2628000000;
            return $convert;
         } else if ($z == 'yr') {
//to year
            $convert = $x / 31540000000;
            return $convert;
         } else if ($z == 'dec') {
//to decade
            $convert = $x / 315400000000;
            return $convert;
         } else if ($z == 'cen') {
//to century
            $convert = $x / 3154000000000;
            return $convert;
         } else {
            return "Arguement Error";
         }
         break;

      case 's': //from seconds
         if ($z == 'ms') {
            //to milli seconds
            $convert = $x * 1000;
            return $convert;
         }

         if ($z == 'week') {
            //to weeks
            $convert = $x / 604800;
            return $convert;
         } else if ($z == 'm') {
            //to minutes
            $convert = $x / 60;
            return $convert;
         } else if ($z == 'hr') {
            //to hours
            $convert = $x / 3600;
            return $convert;
         } else if ($z == 'month') {
            //to months
            $convert = $x / 2628000;
            return $convert;
         } else if ($z == 'day') {
            //to days
            $convert = $x / 86400;
            return $convert;
         } else if ($z == 'yr') {
            //to years
            $convert = $x / 31540000;
            return $convert;
         } else if ($z == 'dec') {
            //to decade
            $convert = $x / 315400000;
            return $convert;
         } else if ($z == 'cen') {
            //to century
            $convert = $x / 315400000;
            return $convert;
         } else {
            return "Arguement Error";
         }

         break;

      case 'min': //from minute
         if ($z == 'ms') {
            //to weeks
            $convert = $x * 60000;
            return $convert;
         }

         if ($z == 'week') {
            //to weeks
            $convert = $x / 10080;
            return $convert;
         } else if ($z == 's') {
            //to seconds
            $convert = $x * 60;
            return $convert;
         } else if ($z == 'hr') {
            //to hours
            $convert = $x / 60;
            return $convert;
         } else if ($z == 'month') {
            //to months
            $convert = $x / 43800;
            return $convert;
         } else if ($z == 'day') {
            //to days
            $convert = $x / 1440;
            return $convert;
         } else if ($z == 'yr') {
            //years
            $convert = $x / 525600;
            return $convert;
         } else if ($z == 'dec') {
            //to decade
            $convert = $x / 5256000;
            return $convert;
         } else if ($z == 'cen') {
            //to century
            $convert = $x / 5256000;
            return $convert;
         } else {
            return "Arguement Error";
         }

         break;

      case 'hr':
         if ($z == 's') {
            //to seconds
            $convert = $x / 3600;
            return $convert;
         } else if ($z == 'month') {
            //to minutes
            $convert = $x / 60;
            return $convert;
         } else if ($z == 'ms') {
            //to milli sec
            $convert = $x / 3600000;
            return $convert;
         } else if ($z == 'day') {
//days
            $convert = $x / 24;
            return $convert;
         } else if ($z == 'w') {
//to weeks
            $convert = $x / 168;
            return $convert;
         } else if ($z == 'month') {
//to month
            $convert = $x / 730;
            return $convert;
         } else if ($z == 'yr') {
//to year
            $convert = $x / 8760;
            return $convert;
         } else if ($z == 'dec') {
//to decade
            $convert = $x / 87600;
            return $convert;
         } else if ($z == 'cen') {
//to century
            $convert = $x / 876000;
            return $convert;
         } else {
            return "Arguement Error";
         }
         break;

      case 'day': //from day
         if ($z == 's') {
            //to seconds
            $convert = $x * 86400;
            return $convert;
         } else if ($z == 'min') {
            //to minutes
            $convert = $x * 1440;
            return $convert;
         } else if ($z == 'ms') {
            //to milli sec
            $convert = $x * 86400000;
            return $convert;
         } else if ($z == 'hr') {
//to hour
            $convert = $x / 24;
            return $convert;
         } else if ($z == 'week') {
//to weeks
            $convert = $x / 7;
            return $convert;
         } else if ($z == 'month') {
//to month
            $convert = $x / 30.417;
            return $convert;
         } else if ($z == 'yr') {
//to year
            $convert = $x / 365;
            return $convert;
         } else if ($z == 'dec') {
//to decade
            $convert = $x / 3650;
            return $convert;
         } else if ($y == 'cen') {
//to century
            $convert = $x / 36500;
            return $convert;
         } else {
            return "Arguement Error";
         }
         break;

      case 'week': //from week
         if ($z == 's') {
            // to seconds
            $convert = $x * 604800;
            return $convert;
         } else if ($z == 'min') {
            //to minutes
            $convert = $x * 10080;
            return $convert;
         } else if ($z == 'hr') {
            //to hours
            $convert = $x * 168;
            return $convert;
         } else if ($z == 'day') {
//to days
            $convert = $x * 7;
            return $convert;
         } else if ($z == 'ms') {
//to milli sec
            $convert = $x * 604800000;
            return $convert;
         } else if ($z == 'month') {
//to month
            $convert = $x / 4.345;
            return $convert;
         } else if ($z == 'yr') {
//to year
            $convert = $x / 52.143;
            return $convert;
         } else if ($z == 'dec') {
//to decade
            $convert = $x / 521;
            return $convert;
         } else if ($z == 'cen') {
//to century
            $convert = $x / 5214;
            return $convert;
         } else {
            return "Arguement Error";
         }
         break;

      case 'month': //from month
         if ($z == 's') {
            //to seconds
            $convert = $x * 2628000;
            return $convert;
         } else if ($z == 'min') {
            //to minutes
            $convert = $x * 43800;
            return $convert;
         } else if ($z == 'hr') {
            //to hours
            $convert = $x * 730;
            return $convert;

         } else if ($z == 'day') {
//to days
            $convert = $x * 30.417;
            return $convert;
         } else if ($z == 'week') {
//to weeks
            $convert = $x * 4.345;
            return $convert;
         } else if ($z == 'ms') {
//to milli sec
            $convert = $x * 2628000000;
            return $convert;
         } else if ($z == 'yr') {
//to yr
            $convert = $x / 12;
            return $convert;
         } else if ($z == 'dec') {
// to decade
            $convert = $x / 120;
            return $convert;
         } else if ($z == 'cen') {
//to century
            $convert = $x / 1200;
            return $convert;
         } else {
            return "Arguement Error";
         }
         break;

      case 'yr': //from year
         if ($z == 's') {
            //seconds
            $convert = $x * 31540000;
            return $convert;
         } else if ($z == 'min') {
            //to minutes
            $convert = $x * 525600;
            return $convert;
         } else if ($z == 'hr') {
            //to hours
            $convert = $x * 8760;
            return $convert;
         } else if ($z == 'day') {
//to days
            $convert = $x * 365;
            return $convert;
         } else if ($z == 'week') {
//to weeks
            $convert = $x * 52.143;
            return $convert;
         } else if ($z == 'month') {
//to month
            $convert = $x * 12;
            return $convert;
         } else if ($z == 'ms') {
//to milli sec
            $convert = $x * 31540000000;
            return $convert;
         } else if ($z == 'dec') {
//to decade
            $todec = $x / 10;
            return $todec;
         } else if ($z == 'c') {
//to century
            $convert = $x / 100;
            return $convert;
         } else {
            return "Arguement Error";
         }
         break;

      case 'dec': // from decade
         if ($z == 's') {
            //to seconds
            $convert = $x * 315400000;
            return $convert;
         } else if ($z == 'min') {
            //to minutes
            $convert = $x * 5256000;
            return $convert;
         } else if ($z == 'hr') {
            //to hours
            $convert = $x * 87600;
            return $convert;
         } else if ($z == 'day') {
//to days
            $convert = $x * 3650;
            return $convert;
         } else if ($z == 'week') {
//to weeks
            $convert = $x * 521;
            return $convert;
         } else if ($z == 'month') {
//to month
            $convert = $x * 120;
            return $convert;
         } else if ($z == 'ms') {
//to milli sec
            $convert = $x * 315400000000;
            return $convert;
         } else if ($z == 'yr') {
//to yr
            $todec = $x * 10;
            return $todec;
         } else if ($z == 'c') {
//to century
            $convert = $x / 10;
            return $convert;
         } else {
            return "Arguement Error";
         }
         break;

      case 'cen': //from centuary
         if ($z == 's') {
            //to seconds
            $convert = $x * 3154000000;
            return $convert;
         } else if ($z == 'min') {
            //to minutes
            $convert = $x * 52560000;
            return $convert;
         } else if ($z == 'hr') {
            //to hours
            $convert = $x * 876000;
            return $convert;
         } else if ($z == 'day') {
//to days
            $convert = $x * 36500;
            return $convert;
         } else if ($z == 'week') {
//to weeks
            $convert = $x * 5214;
            return $convert;
         } else if ($z == 'month') {
//to month
            $convert = $x * 1200;
            return $convert;
         } else if ($z == 'ms') {
//to milli sec
            $convert = $x * 3154000000000;
            return $convert;
         } else if ($z == 'yr') {
//to yr
            $todec = $x * 1200;
            return $todec;
         } else if ($z == 'dec') {
//to decade
            $convert = $x * 100;
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

function volume_converter($x, $y, $z)
{

   switch ($y) {
      case 'l': //from litres
         if ($z == 'oz') {
            //to fliud ounces
            $convert = $x / 1.137;
            return $convert;
         } else if ($z == 'ml') {
            //to milli litre
            $convert = $x * 1000;
            return $convert;
         } else if ($z == 'gal') {
            //to gallons
            $convert = $x / 4.546;
            return $convert;
         } else if ($z == 'ft3') {
            //to cubic ft
            $convert = $x * 61.024;
            return $convert;
         } else if ($z == 'in3') {
            //to cubic inch
            $convert = $x / 10000;
            return $convert;
         } else if ($z == 'm3') {
            //to cubic meters
            $convert = $x / 1000;
            return $convert;
         } else if ($z == 'cm3') {
            //to  cubic centimetre
            $convert = $x * 1000;
            return $convert;
         } else {
            return 'Arguement Error';
         }

         break;

      case 'm3': //from cubic meters
         if ($z == 'oz') {
            //to fliud ounces
            $convert = $x * 33814;
            return $convert;
         } else if ($z == 'ml') {
            //to milli litre
            $convert = $x * 1000000;
            return $convert;
         } else if ($z == 'gal') {
            //to gallons
            $convert = $x * 254;
            return $convert;
         } else if ($z == 'ft3') {
            //to cubic ft
            $convert = $x * 35.315;
            return $convert;
         } else if ($z == 'in3') {
            //to cubic inch
            $convert = $x * 61024;
            return $convert;
         } else if ($z == 'l') {
            //to  litres
            $convert = $x * 1000;
            return $convert;
         } else if ($z == 'cm3') {
            //to  cubic centimetre
            $convert = $x * 1000000;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'ml': //from milli litres
         if ($z == 'oz') {
            //to fliud ounces
            $convert = $x / 29.574;
            return $convert;
         } else if ($z == 'ml') {
            //to milli litre
            $convert = $x / 1000000;
            return $convert;
         } else if ($z == 'gal') {
            //to gallons
            $convert = $x / 4546;
            return $convert;
         } else if ($z == 'ft3') {
            //to cubic ft
            $convert = $x / 28317;
            return $convert;
         } else if ($z == 'in3') {
            //to cubic inch
            $convert = $x / 16.387;
            return $convert;
         } else if ($z == 'l') {
            //to  litres
            $convert = $x / 1000;
            return $convert;
         } else if ($z == 'cm3') {
            //to  cubic centimetre
            $convert = $x * 1;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'gal': //from gallons
         if ($z == 'oz') {
            //to fliud ounces
            $convert = $x * 154;
            return $convert;
         } else if ($z == 'ml') {
            //to milli litre
            $convert = $x * 4546;
            return $convert;
         } else if ($z == 'm3') {
            //to cubic metre
            $convert = $x / 220;
            return $convert;
         } else if ($z == 'ft3') {
            //to cubic ft
            $convert = $x / 6.229;
            return $convert;
         } else if ($z == 'in3') {
            //to cubic inch
            $convert = $x * 277;
            return $convert;
         } else if ($z == 'l') {
            //to  litres
            $convert = $x * 4.546;
            return $convert;
         } else if ($z == 'cm3') {
            //to  cubic centimetre
            $convert = $x * 4546;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'oz': //from fliud ounces
         if ($z == 'm3') {
            //to cubic meters
            $convert = $x / 33814;
            return $convert;
         } else if ($z == 'ml') {
            //to milli litre
            $convert = $x * 29.574;
            return $convert;
         } else if ($z == 'gal') {
            //to gallons
            $convert = $x / 154;
            return $convert;
         } else if ($z == 'ft3') {
            //to cubic ft
            $convert = $x / 958;
            return $convert;
         } else if ($z == 'in3') {
            //to cubic inch
            $convert = $x * 1.805;
            return $convert;
         } else if ($z == 'l') {
            //to  litres
            $convert = $x / 33.814;
            return $convert;
         } else if ($z == 'cm3') {
            //to  cubic centimetre
            $convert = $x * 29.574;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'in3': //from cubic inch
         if ($z == 'oz') {
            //to fliud ounces
            $convert = $x / 1.805;
            return $convert;
         } else if ($z == 'ml') {
            //to milli litre
            $convert = $x * 16.387;
            return $convert;
         } else if ($z == 'gal') {
            //to gallons
            $convert = $x / 277;
            return $convert;
         } else if ($z == 'ft3') {
            //to cubic ft
            $convert = $x / 1728;
            return $convert;
         } else if ($z == 'm3') {
            //to cubic metre
            $convert = $x / 61024;
            return $convert;
         } else if ($z == 'l') {
            //to  litres
            $convert = $x / 61.024;
            return $convert;
         } else if ($z == 'cm3') {
            //to  cubic centimetre
            $convert = $x * 16.387;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'ft3': //from cubic foot
         if ($z == 'oz') {
            //to fliud ounces
            $convert = $x * 958;
            return $convert;
         } else if ($z == 'ml') {
            //to milli litre
            $convert = $x * 28317;
            return $convert;
         } else if ($z == 'gal') {
            //to gallons
            $convert = $x * 6.229;
            return $convert;
         } else if ($z == 'm3') {
            //to cubic metre
            $convert = $x / 35.315;
            return $convert;
         } else if ($z == 'in3') {
            //to cubic inch
            $convert = $x * 1728;
            return $convert;
         } else if ($z == 'l') {
            //to  litres
            $convert = $x * 28.317;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'cm3': //from cubic centimetres
         if ($z == 'oz') {
            //to fliud ounces
            $convert = $x / 29.574;
            return $convert;
         } else if ($z == 'ml') {
            //to milli litre
            $convert = $x * 1;
            return $convert;
         } else if ($z == 'gal') {
            //to gallons
            $convert = $x * 4546;
            return $convert;
         } else if ($z == 'm3') {
            //to cubic metre
            $convert = $x * 1000000;
            return $convert;
         } else if ($z == 'in3') {
            //to cubic inch
            $convert = $x * 16.387;
            return $convert;
         } else if ($z == 'l') {
            //to  litres
            $convert = $x / 1000;
            return $convert;
         } else if ($z == 'ft') {
            //to  ft
            $convert = $x / 283317;
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

function speed_converter($x, $y, $z)
{

   switch ($y) {
      case 'mps': //from metres per seconds
         if ($z == 'kph') {
            //to km per hr
            $convert = $x * 3.6;
            return $convert;
         } else if ($z == 'knots') {
            //to knots
            $convert = $x * 1.944;
            return $convert;
         } else if ($z == 'mph') {
            //to miles per hr
            $convert = $x * 2.237;
            return $convert;
         } else {
            return 'Arguement Error';
         }

         break;

      case 'kph': //from km per hr
         if ($z == 'mps') {
            //to metre per sec
            $convert = $x / 3.6;
            return $convert;
         } else if ($z == 'knots') {
            //to knots
            $convert = $x * 1.852;
            return $convert;
         } else if ($z == 'mph') {
            //to miles per hr
            $convert = $x / 1.609;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'mph': //from miles per hr
         if ($z == 'kph') {
            //to km per hr
            $convert = $x * 1.609;
            return $convert;
         } else if ($z == 'knots') {
            //to knots
            $convert = $x / 1.151;
            return $convert;
         } else if ($z == 'mps') {
            //to metres per sec
            $convert = $x / 2.237;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'knots': //from knots
         if ($z == 'kph') {
            //to km per hr
            $convert = $x * 1.852;
            return $convert;
         } else if ($z == 'mps') {
            //to metre per sec
            $convert = $x / 1.944;
            return $convert;
         } else if ($z == 'mph') {
            //to miles per hr
            $convert = $x * 1.151;
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

function length_converter($x, $y, $z)
{
   switch ($y) {
      case 'km': //from kili metre
         if ($z == 'm') {
            //to metres
            $convert = $x * 1000;
            return $convert;
         } else if ($z == 'cm') {
            //to centi metres
            $convert = $x * 100000;
            return $convert;
         } else if ($z == 'mm') {
            //to mili metres
            $convert = $x * 1000000;
            return $convert;
         } else if ($z == 'um') {
            //to micro metre
            $convert = $x * 1000000000;
            return $convert;
         } else if ($z == 'nm') {
            //to nano meter
            $convert = $x * 1000000000000;
            return $convert;
         } else if ($z == 'mi') {
            //to miles
            $convert = $x / 1.609;
            return $convert;
         } else if ($z == 'yd') {
            //to yards
            $convert = $x * 1094;
            return $convert;
         } else if ($z == 'ft') {
            //to foot
            $convert = $x * 3281;
            return $convert;
         } else if ($z == 'in') {
            //to inch
            $convert = $x * 39370;
            return $convert;
         } else {
            return 'Arguement Error';
         }

         break;

      case 'm': //from metres
         if ($z == 'km') {
            //to kilo metres
            $convert = $x / 1000;
            return $convert;
         } else if ($z == 'cm') {
            //to centi metres
            $convert = $x * 100;
            return $convert;
         } else if ($z == 'mm') {
            //to mili metres
            $convert = $x * 1000;
            return $convert;
         } else if ($z == 'um') {
            //to micro metre
            $convert = $x * 1000000;
            return $convert;
         } else if ($z == 'nm') {
            //to nano meter
            $convert = $x * 1000000000;
            return $convert;
         } else if ($z == 'mi') {
            //to miles
            $convert = $x / 1609;
            return $convert;
         } else if ($z == 'yd') {
            //to yards
            $convert = $x * 1.094;
            return $convert;
         } else if ($z == 'ft') {
            //to foot
            $convert = $x * 3.281;
            return $convert;
         } else if ($z == 'in') {
            //to inch
            $convert = $x * 39.37;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'cm': //from centi metres
         if ($z == 'm') {
            //to metres
            $convert = $x / 100;
            return $convert;
         } else if ($z == 'km') {
            //to kilo metres
            $convert = $x / 100000;
            return $convert;
         } else if ($z == 'mm') {
            //to mili metres
            $convert = $x / 10;
            return $convert;
         } else if ($z == 'um') {
            //to micro metre
            $convert = $x * 10000;
            return $convert;
         } else if ($z == 'nm') {
            //to nano meter
            $convert = $x * 10000000;
            return $convert;
         } else if ($z == 'mi') {
            //to miles
            $convert = $x / 160934;
            return $convert;
         } else if ($z == 'yd') {
            //to yards
            $convert = $x / 91.44;
            return $convert;
         } else if ($z == 'ft') {
            //to foot
            $convert = $x / 30.48;
            return $convert;
         } else if ($z == 'in') {
            //to inch
            $convert = $x / 2.54;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'mm': //from milli metres
         if ($z == 'm') {
            //to metres
            $convert = $x / 1000;
            return $convert;
         } else if ($z == 'cm') {
            //to centi metres
            $convert = $x / 10;
            return $convert;
         } else if ($z == 'km') {
            //to kilo metres
            $convert = $x / 1000000;
            return $convert;
         } else if ($z == 'um') {
            //to micro metre
            $convert = $x * 1000;
            return $convert;
         } else if ($z == 'nm') {
            //to nano meter
            $convert = $x * 1000000;
            return $convert;
         } else if ($z == 'mi') {
            //to miles
            $convert = $x / 1609000;
            return $convert;
         } else if ($z == 'yd') {
            //to yards
            $convert = $x / 194;
            return $convert;
         } else if ($z == 'ft') {
            //to foot
            $convert = $x / 305;
            return $convert;
         } else if ($z == 'in') {
            //to inch
            $convert = $x / 25.4;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'um': //from micro metre
         if ($z == 'm') {
            //to metres
            $convert = $x / 1000000;
            return $convert;
         } else if ($z == 'cm') {
            //to centi metres
            $convert = $x / 10000;
            return $convert;
         } else if ($z == 'mm') {
            //to mili metres
            $convert = $x / 1000;
            return $convert;
         } else if ($z == 'km') {
            //to kilo metre
            $convert = $x / 1000000000;
            return $convert;
         } else if ($z == 'nm') {
            //to nano meter
            $convert = $x * 1000;
            return $convert;
         } else if ($z == 'mi') {
            //to miles
            $convert = $x / 1609000000;
            return $convert;
         } else if ($z == 'yd') {
            //to yards
            $convert = $x / 914400;
            return $convert;
         } else if ($z == 'ft') {
            //to foot
            $convert = $x / 304800;
            return $convert;
         } else if ($z == 'in') {
            //to inch
            $convert = $x / 25400;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'nm': //from nano metre
         if ($z == 'm') {
            //to metres
            $convert = $x / 1000;
            return $convert;
         } else if ($z == 'cm') {
            //to centi metres
            $convert = $x / 10000000;
            return $convert;
         } else if ($z == 'mm') {
            //to mili metres
            $convert = $x / 1000000;
            return $convert;
         } else if ($z == 'um') {
            //to micro metre
            $convert = $x / 1000;
            return $convert;
         } else if ($z == 'km') {
            //to kilo meter
            $convert = $x / 1000000000000;
            return $convert;
         } else if ($z == 'mi') {
            //to miles
            $convert = $x / 1609000000000;
            return $convert;
         } else if ($z == 'yd') {
            //to yards
            $convert = $x / 914400000;
            return $convert;
         } else if ($z == 'ft') {
            //to foot
            $convert = $x / 304800000;
            return $convert;
         } else if ($z == 'in') {
            //to inch
            $convert = $x / 25400000;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'mi': //from miles
         if ($z == 'm') {
            //to metres
            $convert = $x * 1609;
            return $convert;
         } else if ($z == 'cm') {
            //to centi metres
            $convert = $x * 160934;
            return $convert;
         } else if ($z == 'mm') {
            //to mili metres
            $convert = $x * 1609000;
            return $convert;
         } else if ($z == 'um') {
            //to micro metre
            $convert = $x * 1609000000;
            return $convert;
         } else if ($z == 'nm') {
            //to nano meter
            $convert = $x * 1609000000000;
            return $convert;
         } else if ($z == 'km') {
            //to km
            $convert = $x * 1.609;
            return $convert;
         } else if ($z == 'yd') {
            //to yards
            $convert = $x * 1760;
            return $convert;
         } else if ($z == 'ft') {
            //to foot
            $convert = $x * 5280;
            return $convert;
         } else if ($z == 'in') {
            //to inch
            $convert = $x * 63360;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'yd':
         if ($z == 'm') {
            //to metres
            $convert = $x / 1.094;
            return $convert;
         } else if ($z == 'cm') {
            //to centi metres
            $convert = $x * 91.44;
            return $convert;
         } else if ($z == 'mm') {
            //to mili metres
            $convert = $x * 914;
            return $convert;
         } else if ($z == 'um') {
            //to micro metre
            $convert = $x * 914400;
            return $convert;
         } else if ($z == 'nm') {
            //to nano meter
            $convert = $x * 914400000;
            return $convert;
         } else if ($z == 'mi') {
            //to miles
            $convert = $x / 1760;
            return $convert;
         } else if ($z == 'km') {
            //to km
            $convert = $x / 1094;
            return $convert;
         } else if ($z == 'ft') {
            //to foot
            $convert = $x * 3;
            return $convert;
         } else if ($z == 'in') {
            //to inch
            $convert = $x * 36;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'ft': //from foot
         if ($z == 'm') {
            //to metres
            $convert = $x / 3.281;
            return $convert;
         } else if ($z == 'cm') {
            //to centi metres
            $convert = $x * 30.40;
            return $convert;
         } else if ($z == 'mm') {
            //to mili metres
            $convert = $x * 305;
            return $convert;
         } else if ($z == 'um') {
            //to micro metre
            $convert = $x * 304800;
            return $convert;
         } else if ($z == 'nm') {
            //to nano meter
            $convert = $x * 304800000;
            return $convert;
         } else if ($z == 'mi') {
            //to miles
            $convert = $x / 5280;
            return $convert;
         } else if ($z == 'yd') {
            //to yards
            $convert = $x / 3;
            return $convert;
         } else if ($z == 'km') {
            //to kilo metre
            $convert = $x / 3281;
            return $convert;
         } else if ($z == 'in') {
            //to inch
            $convert = $x * 12;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'in':
         if ($z == 'm') {
            //to metres
            $convert = $x / 39.37;
            return $convert;
         } else if ($z == 'cm') {
            //to centi metres
            $convert = $x * 2.54;
            return $convert;
         } else if ($z == 'mm') {
            //to mili metres
            $convert = $x * 25.4;
            return $convert;
         } else if ($z == 'um') {
            //to micro metre
            $convert = $x * 25400;
            return $convert;
         } else if ($z == 'nm') {
            //to nano meter
            $convert = $x * 25400000;
            return $convert;
         } else if ($z == 'mi') {
            //to miles
            $convert = $x / 63360;
            return $convert;
         } else if ($z == 'yd') {
            //to yards
            $convert = $x / 36;
            return $convert;
         } else if ($z == 'ft') {
            //to foot
            $convert = $x * 12;
            return $convert;
         } else if ($z == 'km') {
            //to kilo metre
            $convert = $x / 39370;
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

function pressure_converter($x, $y, $z)
{
   switch ($y) {
      case 'pa': //from pascal
         if ($z == 'kpa') {
            //to kilo pa
            $convert = $x / 1000;
            return $convert;
         } else if ($z == 'mpa') {
            //to milli pa
            $convert = $x / 1000000;
            return $convert;
         } else if ($z == 'bar') {
            //to bar
            $convert = $x / 100000;
            return $convert;
         } else if ($z == 'mbar') {
            //to milli bar
            $convert = $x / 100;
            return $convert;
         } else if ($z == 'psi') {
            //to pounds per square inch
            $convert = $x / 6895;
            return $convert;
         } else {
            return 'Arguement Error';
         }

         break;

      case 'kpa':
         if ($z == 'pa') {
            //to pascal
            $convert = $x * 1000;
            return $convert;
         } else if ($z == 'mpa') {
            //to milli pa
            $convert = $x / 1000000;
            return $convert;
         } else if ($z == 'bar') {
            //to bar
            $convert = $x / 100;
            return $convert;
         } else if ($z == 'mbar') {
            //to milli bar
            $convert = $x * 10;
            return $convert;
         } else if ($z == 'psi') {
            //to pounds per square inch
            $convert = $x / 6.895;
            return $convert;
         } else {
            return 'Arguement Error';
         }

         break;

      case 'mpa': //milli pascal
         if ($z == 'pa') {
            //to pascal
            $convert = $x / 1000;
            return $convert;
         } else if ($z == 'kpa') {
            //to killo paacal
            $convert = $x / 1000000;
            return $convert;
         } else if ($z == 'bar') {
            //to bar
            $convert = $x / 100000000;
            return $convert;
         } else if ($z == 'mbar') {
            //to milli bar
            $convert = $x * 100000;
            return $convert;
         } else if ($z == 'psi') {
            //to pounds per square inch
            $convert = $x * 145.0377;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'bar':
         if ($z == 'pa') {
            //to pascal
            $convert = $x * 100000;
            return $convert;
         } else if ($z == 'kpa') {
            //to killo paacal
            $convert = $x * 100;
            return $convert;
         } else if ($z == 'mpa') {
            //to mega pascal
            $convert = $x / 10;
            return $convert;
         } else if ($z == 'mbar') {
            //to milli bar
            $convert = $x * 1000;
            return $convert;
         } else if ($z == 'psi') {
            //to pounds per square inch
            $convert = $x * 14.504;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'mbar':
         if ($z == 'pa') {
            //to pascal
            $convert = $x * 100;
            return $convert;
         } else if ($z == 'kpa') {
            //to killo paacal
            $convert = $x / 10;
            return $convert;
         } else if ($z == 'mpa') {
            //to mega pascal
            $convert = $x / 10;
            return $convert;
         } else if ($z == 'bar') {
            //to  bar
            $convert = $x / 1000;
            return $convert;
         } else if ($z == 'psi') {
            //to pounds per square inch
            $convert = $x / 68.948;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'psi':
         if ($z == 'pa') {
            //to pascal
            $convert = $x * 6.895;
            return $convert;
         } else if ($z == 'kpa') {
            //to killo paacal
            $convert = $x / 6.895;
            return $convert;
         } else if ($z == 'mpa') {
            //to mega pascal
            $convert = $x / 10000;
            return $convert;
         } else if ($z == 'mbar') {
            //to milli bar
            $convert = $x * 68.948;
            return $convert;
         } else if ($z == 'bar') {
            //to  bar
            $convert = $x / 14.504;
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

function mass_converter($x, $y, $z)
{
   switch ($y) {
      case 'kg': //from kilo gram
         if ($z == 'g') {
            //to gram
            $convert = $x * 1000;
            return $convert;
         } else if ($z == 'lb') {
            //to pounds
            $convert = $x * 2.205;
            return $convert;
         } else if ($z == 'mg') {
            //to millli grams
            $convert = $x * 1000000;
            return $convert;
         } else if ($z == 't') {
            //to tonnes
            $convert = $x / 1000;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'g': //from grams
         if ($z == 'kg') {
            //to killo gram
            $convert = $x / 1000;
            return $convert;
         } else if ($z == 'lb') {
            //to pounds
            $convert = $x / 454;
            return $convert;
         } else if ($z == 'mg') {
            //to millli grams
            $convert = $x * 1000;
            return $convert;
         } else if ($z == 't') {
            //to tonnes
            $convert = $x / 1000000;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'lb': //from pounds
         if ($z == 'g') {
            //to gram
            $convert = $x * 454;
            return $convert;
         } else if ($z == 'kg') {
            //to killo gram
            $convert = $x / 2.205;
            return $convert;
         } else if ($z == 'mg') {
            //to millli grams
            $convert = $x * 453592;
            return $convert;
         } else if ($z == 't') {
            //to tonnes
            $convert = $x / 2205;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'mg': //from milli gram
         if ($z == 'g') {
            //to gram
            $convert = $x / 1000;
            return $convert;
         } else if ($z == 'lb') {
            //to pounds
            $convert = $x / 453592;
            return $convert;
         } else if ($z == 'kg') {
            //to killo grams
            $convert = $x / 1000000;
            return $convert;
         } else if ($z == 't') {
            //to tonnes
            $convert = $x / 1000000000;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 't':
         if ($z == 'g') {
            //to gram
            $convert = $x / 1000000000;
            return $convert;
         } else if ($z == 'lb') {
            //to pounds
            $convert = $x * 2205;
            return $convert;
         } else if ($z == 'mg') {
            //to millli grams
            $convert = $x * 1000000000;
            return $convert;
         } else if ($z == 'kg') {
            //to kilo gram
            $convert = $x * 1000;
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

function frequency_converter($x, $y, $z)
{
   switch ($y) {
      case 'hz': // from hertz
         if ($z == 'khz') {
            //to kilo hertz
            $convert = $x / 1000;
            return $convert;
         } else if ($z == 'mhz') {
            //to mega hertz
            $convert = $x / 1000000;
            return $convert;
         } else if ($z == 'ghz') {
            //to giga hertz
            $convert = $x / 1000000000;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'khz': // from kilo hertz
         if ($z == 'hz') {
            //to hertz
            $convert = $x / 1000000;
            return $convert;
         } else if ($z == 'mhz') {
            //to mega hertz
            $convert = $x * 1000;
            return $convert;
         } else if ($z == 'ghz') {
            //to giga hertz
            $convert = $x / 100000;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'mhz':
         if ($z == 'khz') {
            //to kilo hertz
            $convert = $x * 1000;
            return $convert;
         } else if ($z == 'hz') {
            //to  hertz
            $convert = $x * 1000000;
            return $convert;
         } else if ($z == 'ghz') {
            //to giga hertz
            $convert = $x / 1000;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'ghz':
         if ($z == 'khz') {
            //to kilo hertz
            $convert = $x * 1000000;
            return $convert;
         } else if ($z == 'mhz') {
            //to mega hertz
            $convert = $x / 1000;
            return $convert;
         } else if ($z == 'hz') {
            //to  hertz
            $convert = $x * 1000000000;
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

function energy_converter($x, $y, $z)
{
   switch ($y) {
      case 'j': //from joules
         if ($z == 'kj') {
            //to kilo joules
            $convert = $x / 1000;
            return $convert;
         } else if ($z == 'gcal') {
            //to gram calorie
            $convert = $x / 4.184;
            return $convert;
         } else if ($z == 'whr') {
            //to watt hr
            $convert = $x / 3600;
            return $convert;
         } else if ($z == 'kwhr') {
            //to kilo watt hr
            $convert = $x / 36000000;
            return $convert;
         } else if ($z == 'ev') {
            //to electronvolt
            $convert = $x * 6242000000000000000;
            return $convert;
         } else if ($z == 'kcal') {
            //to killo calorie
            $convert = $x / 4184;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'kj': // from kilo joules
         if ($z == 'j') {
            //to  joules
            $convert = $x * 1000;
            return $convert;
         } else if ($z == 'gcal') {
            //to gram calorie
            $convert = $x * 239;
            return $convert;
         } else if ($z == 'whr') {
            //to watt hr
            $convert = $x / 3.6;
            return $convert;
         } else if ($z == 'kwhr') {
            //to kilo watt hr
            $convert = $x / 3600;
            return $convert;
         } else if ($z == 'ev') {
            //to electronvolt
            $convert = $x * 6241500000000000000000;
            return $convert;
         } else if ($z == 'kcal') {
            //to killo calorie
            $convert = $x / 4.184;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'gcal': //from gram calorie
         if ($z == 'kj') {
            //to kilo joules
            $convert = $x / 239;
            return $convert;
         } else if ($z == 'j') {
            //to  joules
            $convert = $x * 4.184;
            return $convert;
         } else if ($z == 'whr') {
            //to watt hr
            $convert = $x / 860;
            return $convert;
         } else if ($z == 'kwhr') {
            //to kilo watt hr
            $convert = $x / 860421;
            return $convert;
         } else if ($z == 'ev') {
            //to electronvolt
            $convert = $x * 26130000000000000000;
            return $convert;
         } else if ($z == 'kcal') {
            //to killo calorie
            $convert = $x / 1000;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'whr': //from watt hr
         if ($z == 'kj') {
            //to kilo joules
            $convert = $x * 3.6;
            return $convert;
         } else if ($z == 'gcal') {
            //to gram calorie
            $convert = $x * 860;
            return $convert;
         } else if ($z == 'j') {
            //to joules
            $convert = $x * 3600;
            return $convert;
         } else if ($z == 'kwhr') {
            //to kilo watt hr
            $convert = $x / 1000;
            return $convert;
         } else if ($z == 'ev') {
            //to electronvolt
            $convert = $x * 22469000000000000000000;
            return $convert;
         } else if ($z == 'kcal') {
            //to killo calorie
            $convert = $x / 1.162;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'kwhr':
         if ($z == 'kj') {
            //to kilo joules
            $convert = $x * 1000;
            return $convert;
         } else if ($z == 'gcal') {
            //to gram calorie
            $convert = $x * 860421;
            return $convert;
         } else if ($z == 'whr') {
            //to watt hr
            $convert = $x * 1000;
            return $convert;
         } else if ($z == 'j') {
            //to joules
            $convert = $x * 3600000;
            return $convert;
         } else if ($z == 'ev') {
            //to electronvolt
            $convert = $x * 22469000000000000000000000;
            return $convert;
         } else if ($z == 'kcal') {
            //to killo calorie
            $convert = $x * 860;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'ev':
         if ($z == 'kj') {
            //to kilo joules
            $convert = $x * 0.000000000000000000000160218;
            return $convert;
         } else if ($z == 'gcal') {
            //to gram calorie
            $convert = $x * 0.0000000000000000000382765;
            return $convert;
         } else if ($z == 'whr') {
            //to watt hr
            $convert = $x * 0.0000000000000000000000044505;
            return $convert;
         } else if ($z == 'kwhr') {
            //to kilo watt hr
            $convert = $x * 0.000000000000000000000000044505;
            return $convert;
         } else if ($z == 'j') {
            //to joules
            $convert = $x / 0.0000000000000000062415;
            return $convert;
         } else if ($z == 'kcal') {
            //to killo calorie
            $convert = $x * 0.000000000000000000000038293;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'kcal':
         if ($z == 'kj') {
            //to kilo joules
            $convert = $x * 4.184;
            return $convert;
         } else if ($z == 'gcal') {
            //to gram calorie
            $convert = $x * 1000;
            return $convert;
         } else if ($z == 'whr') {
            //to watt hr
            $convert = $x * 1.162;
            return $convert;
         } else if ($z == 'kwhr') {
            //to kilo watt hr
            $convert = $x / 860;
            return $convert;
         } else if ($z == 'ev') {
            //to electronvolt
            $convert = $x * 2.6114000000000000000000;
            return $convert;
         } else if ($z == 'j') {
            //to joules
            $convert = $x * 4184;
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

function disk_storage($x, $y, $z)
{
   switch ($y) {
      case 'bit': // from bit
         if ($z == 'byte') {
            //to byte
            $convert = $x / 8;
            return $convert;
         } else if ($z == 'kb') {
            //to kilobyte
            $convert = $x / 8000;
            return $convert;
         } else if ($z == 'mb') {
            //to megabyte
            $convert = $x / 8000000;
            return $convert;
         } else if ($z == 'gb') {
            //to gigabyte
            $convert = $x / 8000000000;
            return $convert;
         } else if ($z == 'tb') {
            //to terabyte
            $convert = $x / 8000000000000;
            return $convert;
         } else if ($z == 'pb') {
            //to petabyte
            $convert = $x / 8000000000000000;
            return $convert;
         } else {
            return 'Arguement Error';
         }

         break;

      case 'byte': //from byte
         if ($z == 'bit') {
            //to bit
            $convert = $x * 8;
            return $convert;
         } else if ($z == 'kb') {
            //to kilobyte
            $convert = $x / 1000;
            return $convert;
         } else if ($z == 'mb') {
            //to megabyte
            $convert = $x / 1000000;
            return $convert;
         } else if ($z == 'gb') {
            //to gigabyte
            $convert = $x / 1000000000;
            return $convert;
         } else if ($z == 'tb') {
            //to terabyte
            $convert = $x / 1000000000000;
            return $convert;
         } else if ($z == 'pb') {
            //to petabyte
            $convert = $x / 1000000000000000;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'kb': //from kilo byte
         if ($z == 'byte') {
            //to byte
            $convert = $x * 1000;
            return $convert;
         } else if ($z == 'bit') {
            //to bit
            $convert = $x * 8000;
            return $convert;
         } else if ($z == 'mb') {
            //to megabyte
            $convert = $x / 125;
            return $convert;
         } else if ($z == 'gb') {
            //to gigabyte
            $convert = $x / 125000;
            return $convert;
         } else if ($z == 'tb') {
            //to terabyte
            $convert = $x / 1000000000;
            return $convert;
         } else if ($z == 'pb') {
            //to petabyte
            $convert = $x / 1000000000000;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'mb':
         if ($z == 'byte') {
            //to byte
            $convert = $x * 1000000;
            return $convert;
         } else if ($z == 'kb') {
            //to kilobyte
            $convert = $x * 1000;
            return $convert;
         } else if ($z == 'bit') {
            //to bit
            $convert = $x * 8000000;
            return $convert;
         } else if ($z == 'gb') {
            //to gigabyte
            $convert = $x / 1074;
            return $convert;
         } else if ($z == 'tb') {
            //to terabyte
            $convert = $x / 1000000;
            return $convert;
         } else if ($z == 'pb') {
            //to petabyte
            $convert = $x / 1000000000;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'gb':
         if ($z == 'byte') {
            //to byte
            $convert = $x * 1000000000;
            return $convert;
         } else if ($z == 'kb') {
            //to kilobyte
            $convert = $x * 1000000;
            return $convert;
         } else if ($z == 'mb') {
            //to megabyte
            $convert = $x * 1000;
            return $convert;
         } else if ($z == 'bit') {
            //to bit
            $convert = $x * 8000000000;
            return $convert;
         } else if ($z == 'tb') {
            //to terabyte
            $convert = $x / 1000;
            return $convert;
         } else if ($z == 'pb') {
            //to petabyte
            $convert = $x / 1000000;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'tb':
         if ($z == 'byte') {
            //to byte
            $convert = $x * 1000000000000;
            return $convert;
         } else if ($z == 'kb') {
            //to kilobyte
            $convert = $x * 1000000000;
            return $convert;
         } else if ($z == 'mb') {
            //to megabyte
            $convert = $x * 1000000;
            return $convert;
         } else if ($z == 'gb') {
            //to gigabyte
            $convert = $x * 1000;
            return $convert;
         } else if ($z == 'bit') {
            //to bit
            $convert = $x * 8000000000000;
            return $convert;
         } else if ($z == 'pb') {
            //to petabyte
            $convert = $x / 1000;
            return $convert;
         } else {
            return 'Arguement Error';
         }
         break;

      case 'pb':
         if ($z == 'byte') {
            //to byte
            $convert = $x * 1000000000000000;
            return $convert;
         } else if ($z == 'kb') {
            //to kilobyte
            $convert = $x * 1000000000000;
            return $convert;
         } else if ($z == 'mb') {
            //to megabyte
            $convert = $x * 1000000000;
            return $convert;
         } else if ($z == 'gb') {
            //to gigabyte
            $convert = $x * 1000000;
            return $convert;
         } else if ($z == 'tb') {
            //to terabyte
            $convert = $x * 1000;
            return $convert;
         } else if ($z == 'bit') {
            //to bit
            $convert = $x * 8000000000000000;
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
