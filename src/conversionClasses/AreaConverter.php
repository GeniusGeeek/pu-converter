<?php

class Area
{
  public function area_converter($value, $fromUnit, $toUnit)
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
          return 'UnexpectedArgumentException';
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
          return 'UnexpectedArgumentException';
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
          return 'UnexpectedArgumentException';
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
          return 'UnexpectedArgumentException';
        }
        break;

      default:
        return 'UnexpectedArgumentException';
        break;
    }
  }
}


