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
            if ($toUnit === 'k') {
                //to kelvin
                return ($value - 32) * 5 / 9 + 273;
            } elseif ($toUnit === 'c') {
                //to celsius
                return ($value - 32) * 5 / 9;
            } else {
                return 'Argument Error';
            }
            break;

        case 'k': //from kelvin
            if ($toUnit === 'c') {
                //to celsius
                return $value - 273;
            } elseif ($toUnit === 'f') {
                //to fahrenheit
                return ($value - 273) * 9 / 5 + 32;
            } else {
                return 'Argument Error';
            }
            break;

        case 'c': //from celsius
            if ($toUnit === 'f') {
                //to fahrenheit
                return ($value * 9 / 5) + 32;
            } elseif ($toUnit === 'k') {
//to kelvin
                return $value + 273;
            } else {
                return 'Argument Error';
            }
            break;

        default:
            return "Argument Error";
            break;
    }
}

/* Area Converter*/

function area_converter($value, $fromUnit, $toUnit)
{
    switch ($fromUnit) {
        case 'm2': //from sqr meter
            if ($toUnit === 'km2') {
                //to sqr km
                return $value / 1000000;
            } elseif ($toUnit === 'mi2') {
                //to sqr miles
                return $value / 2590000;
            } elseif ($toUnit === 'yd2') {
                //to sqr yard
                return $value * 1.196;
            } elseif ($toUnit === 'ft2') {
                //to sqr ft
                return $value * 10.764;
            } elseif ($toUnit === 'in2') {
                //to sqr inch
                return $value * 1550;
            } elseif ($toUnit === 'ha') {
                //to sqr hectare
                return $value * 10000;
            } elseif ($toUnit === 'ac') {
                //to sqr acre
                return $value / 4047;
            } else {
                return 'Argument Error';
            }
            break;

        case 'km2': //from km2
            if ($toUnit === 'sM') {
                //to sqr m
                return $value * 1000000;
            } elseif ($toUnit === 'mi2') {
                //to sqr miles
                return $value / 2.59;
            } elseif ($toUnit === 'yd2') {
                //to sqr yard
                return $value * 1.196000;
            } elseif ($toUnit === 'ft2') {
                //to sqr ft
                return $value * 1.0760000;
            } elseif ($toUnit === 'in2') {
                //to sqr inch
                return $value * 1.550000000;
            } elseif ($toUnit === 'ha') {
                // to hectare
                return $value * 100;
            } elseif ($toUnit === 'ac') {
                // to acre
                return $value * 247;
            } else {
                return 'Argument Error';
            }
            break;

        case 'ac': //from acre
            if ($toUnit === 'ha') {
                //to hectare
                return $value / 2.471;
            } elseif ($toUnit === 'm2') {
                //to sqr m
                return $value * 4047;
            } elseif ($toUnit === 'km2') {
                //to sqr km
                return $value / 247;
            } else {
                return 'Argument Error';
            }
            break;

        case 'ha': //from hectare
            if ($toUnit === 'ac') {
                //to acre
                return $value * 2.471;
            } elseif ($toUnit === 'm2') {
                //to sqr m
                return $value * 10000;
            } elseif ($toUnit === 'km2') {
                //to sqr km
                return $value / 100;
            } else {
                return 'Argument Error';
            }
            break;

        default:
            return 'Argument Error';
            break;
    }
}

/* PLANE ANGLES CONVERTER*/

function angles_converter($value, $fromUnit, $toUnit)
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
                return 'Argument Error';
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
                return 'Argument Error';
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
                return 'Argument Error';
            }
            break;

        default:
            return 'Argument Error';
            break;
    }
}

/*TIME CONVERTER*/

function time_converter($value, $fromUnit, $toUnit)
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
                return "Argument Error";
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
                return "Argument Error";
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
                return "Argument Error";
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
                return "Argument Error";
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
                return "Argument Error";
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
                return "Argument Error";
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
                return "Argument Error";
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
                return "Argument Error";
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
                return "Argument Error";
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
                return "Argument Error";
            }
            break;

        default:
            return 'Argument Error';
            break;
    }
}

function volume_converter($value, $fromUnit, $toUnit)
{
    switch ($fromUnit) {
        case 'l': //from litres
            if ($toUnit === 'oz') {
                //to fluid ounces
                return $value / 1.137;
            } elseif ($toUnit === 'ml') {
                //to milli litre
                return $value * 1000;
            } elseif ($toUnit === 'gal') {
                //to gallons
                return $value / 4.546;
            } elseif ($toUnit === 'ft3') {
                //to cubic ft
                return $value * 61.024;
            } elseif ($toUnit === 'in3') {
                //to cubic inch
                return $value / 10000;
            } elseif ($toUnit === 'm3') {
                //to cubic meters
                return $value / 1000;
            } elseif ($toUnit === 'cm3') {
                //to  cubic centimetre
                return $value * 1000;
            } else {
                return 'Argument Error';
            }

            break;

        case 'm3': //from cubic meters
            if ($toUnit === 'oz') {
                //to fluid ounces
                return $value * 33814;
            } elseif ($toUnit === 'ml') {
                //to milli litre
                return $value * 1000000;
            } elseif ($toUnit === 'gal') {
                //to gallons
                return $value * 254;
            } elseif ($toUnit === 'ft3') {
                //to cubic ft
                return $value * 35.315;
            } elseif ($toUnit === 'in3') {
                //to cubic inch
                return $value * 61024;
            } elseif ($toUnit === 'l') {
                //to  litres
                return $value * 1000;
            } elseif ($toUnit === 'cm3') {
                //to  cubic centimetre
                return $value * 1000000;
            } else {
                return 'Argument Error';
            }
            break;

        case 'ml': //from milli litres
            if ($toUnit === 'oz') {
                //to fluid ounces
                return $value / 29.574;
            } elseif ($toUnit === 'ml') {
                //to milli litre
                return $value / 1000000;
            } elseif ($toUnit === 'gal') {
                //to gallons
                return $value / 4546;
            } elseif ($toUnit === 'ft3') {
                //to cubic ft
                return $value / 28317;
            } elseif ($toUnit === 'in3') {
                //to cubic inch
                return $value / 16.387;
            } elseif ($toUnit === 'l') {
                //to  litres
                return $value / 1000;
            } elseif ($toUnit === 'cm3') {
                //to  cubic centimetre
                return $value * 1;
            } else {
                return 'Argument Error';
            }
            break;

        case 'gal': //from gallons
            if ($toUnit === 'oz') {
                //to fluid ounces
                return $value * 154;
            } elseif ($toUnit === 'ml') {
                //to milli litre
                return $value * 4546;
            } elseif ($toUnit === 'm3') {
                //to cubic metre
                return $value / 220;
            } elseif ($toUnit === 'ft3') {
                //to cubic ft
                return $value / 6.229;
            } elseif ($toUnit === 'in3') {
                //to cubic inch
                return $value * 277;
            } elseif ($toUnit === 'l') {
                //to  litres
                return $value * 4.546;
            } elseif ($toUnit === 'cm3') {
                //to  cubic centimetre
                return $value * 4546;
            } else {
                return 'Argument Error';
            }
            break;

        case 'oz': //from fluid ounces
            if ($toUnit === 'm3') {
                //to cubic meters
                return $value / 33814;
            } elseif ($toUnit === 'ml') {
                //to milli litre
                return $value * 29.574;
            } elseif ($toUnit === 'gal') {
                //to gallons
                return $value / 154;
            } elseif ($toUnit === 'ft3') {
                //to cubic ft
                return $value / 958;
            } elseif ($toUnit === 'in3') {
                //to cubic inch
                return $value * 1.805;
            } elseif ($toUnit === 'l') {
                //to  litres
                return $value / 33.814;
            } elseif ($toUnit === 'cm3') {
                //to  cubic centimetre
                return $value * 29.574;
            } else {
                return 'Argument Error';
            }
            break;

        case 'in3': //from cubic inch
            if ($toUnit === 'oz') {
                //to fluid ounces
                return $value / 1.805;
            } elseif ($toUnit === 'ml') {
                //to milli litre
                return $value * 16.387;
            } elseif ($toUnit === 'gal') {
                //to gallons
                return $value / 277;
            } elseif ($toUnit === 'ft3') {
                //to cubic ft
                return $value / 1728;
            } elseif ($toUnit === 'm3') {
                //to cubic metre
                return $value / 61024;
            } elseif ($toUnit === 'l') {
                //to  litres
                return $value / 61.024;
            } elseif ($toUnit === 'cm3') {
                //to  cubic centimetre
                return $value * 16.387;
            } else {
                return 'Argument Error';
            }
            break;

        case 'ft3': //from cubic foot
            if ($toUnit === 'oz') {
                //to fluid ounces
                return $value * 958;
            } elseif ($toUnit === 'ml') {
                //to milli litre
                return $value * 28317;
            } elseif ($toUnit === 'gal') {
                //to gallons
                return $value * 6.229;
            } elseif ($toUnit === 'm3') {
                //to cubic metre
                return $value / 35.315;
            } elseif ($toUnit === 'in3') {
                //to cubic inch
                return $value * 1728;
            } elseif ($toUnit === 'l') {
                //to  litres
                return $value * 28.317;
            } else {
                return 'Argument Error';
            }
            break;

        case 'cm3': //from cubic centimetres
            if ($toUnit === 'oz') {
                //to fluid ounces
                return $value / 29.574;
            } elseif ($toUnit === 'ml') {
                //to milli litre
                return $value * 1;
            } elseif ($toUnit === 'gal') {
                //to gallons
                return $value * 4546;
            } elseif ($toUnit === 'm3') {
                //to cubic metre
                return $value * 1000000;
            } elseif ($toUnit === 'in3') {
                //to cubic inch
                return $value * 16.387;
            } elseif ($toUnit === 'l') {
                //to  litres
                return $value / 1000;
            } elseif ($toUnit === 'ft') {
                //to  ft
                return $value / 283317;
            } else {
                return 'Argument Error';
            }
            break;

        default:
            return 'Argument Error';
            break;
    }
}

/* SPEED CONVERTER */

function speed_converter($value, $fromUnit, $toUnit)
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
                return 'Argument Error';
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
                return 'Argument Error';
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
                return 'Argument Error';
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
                return 'Argument Error';
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
        case 'km': //from kilometre
            if ($toUnit === 'm') {
                //to metres
                return $value * 1000;
            } elseif ($toUnit === 'cm') {
                //to centi metres
                return $value * 100000;
            } elseif ($toUnit === 'mm') {
                //to millimetres
                return $value * 1000000;
            } elseif ($toUnit === 'um') {
                //to micro metre
                return $value * 1000000000;
            } elseif ($toUnit === 'nm') {
                //to nano meter
                return $value * 1000000000000;
            } elseif ($toUnit === 'mi') {
                //to miles
                return $value / 1.609;
            } elseif ($toUnit === 'yd') {
                //to yards
                return $value * 1094;
            } elseif ($toUnit === 'ft') {
                //to foot
                return $value * 3281;
            } elseif ($toUnit === 'in') {
                //to inch
                return $value * 39370;
            } else {
                return 'Argument Error';
            }

            break;

        case 'm': //from metres
            if ($toUnit === 'km') {
                //to kilo metres
                return $value / 1000;
            } elseif ($toUnit === 'cm') {
                //to centi metres
                return $value * 100;
            } elseif ($toUnit === 'mm') {
                //to millimetres
                return $value * 1000;
            } elseif ($toUnit === 'um') {
                //to micro metre
                return $value * 1000000;
            } elseif ($toUnit === 'nm') {
                //to nano meter
                return $value * 1000000000;
            } elseif ($toUnit === 'mi') {
                //to miles
                return $value / 1609;
            } elseif ($toUnit === 'yd') {
                //to yards
                return $value * 1.094;
            } elseif ($toUnit === 'ft') {
                //to foot
                return $value * 3.281;
            } elseif ($toUnit === 'in') {
                //to inch
                return $value * 39.37;
            } else {
                return 'Argument Error';
            }
            break;

        case 'cm': //from centi metres
            if ($toUnit === 'm') {
                //to metres
                return $value / 100;
            } elseif ($toUnit === 'km') {
                //to kilo metres
                return $value / 100000;
            } elseif ($toUnit === 'mm') {
                //to millimetres
                return $value / 10;
            } elseif ($toUnit === 'um') {
                //to micro metre
                return $value * 10000;
            } elseif ($toUnit === 'nm') {
                //to nano meter
                return $value * 10000000;
            } elseif ($toUnit === 'mi') {
                //to miles
                return $value / 160934;
            } elseif ($toUnit === 'yd') {
                //to yards
                return $value / 91.44;
            } elseif ($toUnit === 'ft') {
                //to foot
                return $value / 30.48;
            } elseif ($toUnit === 'in') {
                //to inch
                return $value / 2.54;
            } else {
                return 'Argument Error';
            }
            break;

        case 'mm': //from milli metres
            if ($toUnit === 'm') {
                //to metres
                return $value / 1000;
            } elseif ($toUnit === 'cm') {
                //to centi metres
                return $value / 10;
            } elseif ($toUnit === 'km') {
                //to kilo metres
                return $value / 1000000;
            } elseif ($toUnit === 'um') {
                //to micro metre
                return $value * 1000;
            } elseif ($toUnit === 'nm') {
                //to nano meter
                return $value * 1000000;
            } elseif ($toUnit === 'mi') {
                //to miles
                return $value / 1609000;
            } elseif ($toUnit === 'yd') {
                //to yards
                return $value / 194;
            } elseif ($toUnit === 'ft') {
                //to foot
                return $value / 305;
            } elseif ($toUnit === 'in') {
                //to inch
                return $value / 25.4;
            } else {
                return 'Argument Error';
            }
            break;

        case 'um': //from micro metre
            if ($toUnit === 'm') {
                //to metres
                return $value / 1000000;
            } elseif ($toUnit === 'cm') {
                //to centi metres
                return $value / 10000;
            } elseif ($toUnit === 'mm') {
                //to millimetres
                return $value / 1000;
            } elseif ($toUnit === 'km') {
                //to kilo metre
                return $value / 1000000000;
            } elseif ($toUnit === 'nm') {
                //to nano meter
                return $value * 1000;
            } elseif ($toUnit === 'mi') {
                //to miles
                return $value / 1609000000;
            } elseif ($toUnit === 'yd') {
                //to yards
                return $value / 914400;
            } elseif ($toUnit === 'ft') {
                //to foot
                return $value / 304800;
            } elseif ($toUnit === 'in') {
                //to inch
                return $value / 25400;
            } else {
                return 'Argument Error';
            }
            break;

        case 'nm': //from nano metre
            if ($toUnit === 'm') {
                //to metres
                return $value / 1000;
            } elseif ($toUnit === 'cm') {
                //to centi metres
                return $value / 10000000;
            } elseif ($toUnit === 'mm') {
                //to millimetres
                return $value / 1000000;
            } elseif ($toUnit === 'um') {
                //to micro metre
                return $value / 1000;
            } elseif ($toUnit === 'km') {
                //to kilo meter
                return $value / 1000000000000;
            } elseif ($toUnit === 'mi') {
                //to miles
                return $value / 1609000000000;
            } elseif ($toUnit === 'yd') {
                //to yards
                return $value / 914400000;
            } elseif ($toUnit === 'ft') {
                //to foot
                return $value / 304800000;
            } elseif ($toUnit === 'in') {
                //to inch
                return $value / 25400000;
            } else {
                return 'Argument Error';
            }
            break;

        case 'mi': //from miles
            if ($toUnit === 'm') {
                //to metres
                return $value * 1609;
            } elseif ($toUnit === 'cm') {
                //to centi metres
                return $value * 160934;
            } elseif ($toUnit === 'mm') {
                //to millimetres
                return $value * 1609000;
            } elseif ($toUnit === 'um') {
                //to micro metre
                return $value * 1609000000;
            } elseif ($toUnit === 'nm') {
                //to nano meter
                return $value * 1609000000000;
            } elseif ($toUnit === 'km') {
                //to km
                return $value * 1.609;
            } elseif ($toUnit === 'yd') {
                //to yards
                return $value * 1760;
            } elseif ($toUnit === 'ft') {
                //to foot
                return $value * 5280;
            } elseif ($toUnit === 'in') {
                //to inch
                return $value * 63360;
            } else {
                return 'Argument Error';
            }
            break;

        case 'yd':
            if ($toUnit === 'm') {
                //to metres
                return $value / 1.094;
            } elseif ($toUnit === 'cm') {
                //to centi metres
                return $value * 91.44;
            } elseif ($toUnit === 'mm') {
                //to millimetres
                return $value * 914;
            } elseif ($toUnit === 'um') {
                //to micro metre
                return $value * 914400;
            } elseif ($toUnit === 'nm') {
                //to nano meter
                return $value * 914400000;
            } elseif ($toUnit === 'mi') {
                //to miles
                return $value / 1760;
            } elseif ($toUnit === 'km') {
                //to km
                return $value / 1094;
            } elseif ($toUnit === 'ft') {
                //to foot
                return $value * 3;
            } elseif ($toUnit === 'in') {
                //to inch
                return $value * 36;
            } else {
                return 'Argument Error';
            }
            break;

        case 'ft': //from foot
            if ($toUnit === 'm') {
                //to metres
                return $value / 3.281;
            } elseif ($toUnit === 'cm') {
                //to centi metres
                return $value * 30.40;
            } elseif ($toUnit === 'mm') {
                //to millimetres
                return $value * 305;
            } elseif ($toUnit === 'um') {
                //to micro metre
                return $value * 304800;
            } elseif ($toUnit === 'nm') {
                //to nano meter
                return $value * 304800000;
            } elseif ($toUnit === 'mi') {
                //to miles
                return $value / 5280;
            } elseif ($toUnit === 'yd') {
                //to yards
                return $value / 3;
            } elseif ($toUnit === 'km') {
                //to kilo metre
                return $value / 3281;
            } elseif ($toUnit === 'in') {
                //to inch
                return $value * 12;
            } else {
                return 'Argument Error';
            }
            break;

        case 'in':
            if ($toUnit === 'm') {
                //to metres
                return $value / 39.37;
            } elseif ($toUnit === 'cm') {
                //to centi metres
                return $value * 2.54;
            } elseif ($toUnit === 'mm') {
                //to millimetres
                return $value * 25.4;
            } elseif ($toUnit === 'um') {
                //to micro metre
                return $value * 25400;
            } elseif ($toUnit === 'nm') {
                //to nano meter
                return $value * 25400000;
            } elseif ($toUnit === 'mi') {
                //to miles
                return $value / 63360;
            } elseif ($toUnit === 'yd') {
                //to yards
                return $value / 36;
            } elseif ($toUnit === 'ft') {
                //to foot
                return $value * 12;
            } elseif ($toUnit === 'km') {
                //to kilo metre
                return $value / 39370;
            } else {
                return 'Argument Error';
            }
            break;

        default:
            return 'Argument Error';
            break;
    }
}

function pressure_converter($value, $fromUnit, $toUnit)
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
                return 'Argument Error';
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
                return 'Argument Error';
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
                return 'Argument Error';
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
                return 'Argument Error';
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
                return 'Argument Error';
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
                return 'Argument Error';
            }
            break;

        default:
            return 'Argument Error';
            break;
    }
}

function mass_converter($value, $fromUnit, $toUnit)
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
                return 'Argument Error';
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
                return 'Argument Error';
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
                return 'Argument Error';
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
                return 'Argument Error';
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
                return 'Argument Error';
            }
            break;

        default:
            return 'Argument Error';
            break;
    }
}

/* FREQUENCY CONVERTER*/

function frequency_converter($value, $fromUnit, $toUnit)
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
                return 'Argument Error';
            }
            break;

        case 'khz': // from kilo hertz
            if ($toUnit === 'hz') {
                //to hertz
                return $value / 1000000;
            } elseif ($toUnit === 'mhz') {
                //to mega hertz
                return $value * 1000;
            } elseif ($toUnit === 'ghz') {
                //to giga hertz
                return $value / 100000;
            } else {
                return 'Argument Error';
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
                return 'Argument Error';
            }
            break;

        case 'ghz':
            if ($toUnit === 'khz') {
                //to kilo hertz
                return $value * 1000000;
            } elseif ($toUnit === 'mhz') {
                //to mega hertz
                return $value / 1000;
            } elseif ($toUnit === 'hz') {
                //to  hertz
                return $value * 1000000000;
            } else {
                return 'Argument Error';
            }
            break;

        default:
            return 'Argument Error';
            break;
    }
}

/* ENERGY CONVERTER */

function energy_converter($value, $fromUnit, $toUnit)
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
                return 'Argument Error';
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
                return 'Argument Error';
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
                return 'Argument Error';
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
                return 'Argument Error';
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
                return 'Argument Error';
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
                return 'Argument Error';
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
                return 'Argument Error';
            }
            break;

        default:
            return 'Argument Error';
            break;
    }
}

/*  DIGITAL STORAGE */

function disk_storage($value, $fromUnit, $toUnit)
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
                return 'Argument Error';
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
                return 'Argument Error';
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
                return 'Argument Error';
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
                return 'Argument Error';
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
                return 'Argument Error';
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
                return 'Argument Error';
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
                return 'Argument Error';
            }
            break;

        default:
            return 'Argument Error';
            break;
    }
}
