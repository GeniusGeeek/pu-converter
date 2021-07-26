
 [![License](http://poser.pugx.org/geniusgeeek/pu-converter/license)](https://packagist.org/packages/geniusgeeek/pu-converter)
 <a href="https://circleci.com/gh/badges/shields/tree/master">
  <img src="https://img.shields.io/circleci/project/github/badges/shields/master" alt="build status"></a>
# PU-converter
PU-converter is an easy to use PHP unit converter library for converting S.I units to other compatible unit types. 
With PU-converter you can easily convert any engineering unit to its different unit types, for example, kilogram to grams, celsius to kelvin, e.t.c.
Save your self the math stress and let the PU-converter library handle all conversions for you.

# Coverage
PU-converter allows you to convert any unit to any other compatible unit type.

It has no external dependencies, simply include the library in your project and you're set

PU-converter can handle a wide range of unit types including: 

* Length
* Area
* Volume
* Mass
* Speed
* Temperature
* Pressure
* Time
* Energy/Power
* Disk Storage
* Frequency
* Plane Angles

## Installation


## Using Composer
PU-converter can be insatlled using composer
```bash
composer require geniusgeeek/pu-converter
```
## without composer
To utilize this class, first import puconverter.php into your project, and instantiate it.
```php
include '/path/to/puconverter.php';
use  unitConverter\puconverter\PUconverter;
```

## Guidelines: How to use
1. Create an object of the class for conversion 
2. The object propeties should be initialised on object creation
3. Parameter 1 is the class for conversion, Parameter 2 is the value to be converted, Parameter 3 is the unit to convert, Parameter 4 is the unit to be converted to
4. To return the conversion call the method convert()
5. All units are to be passed in their SI units/abbreviations, example: kilogram is kg, seconds is s, e.t.c.

           
# Documentation

## Create an object for different conversion class using the syntax below

1. $temperature => new PUconverter("temperature", $value, $fromUnit, $toUnit);
2. Area => new PUconverter("area", $value, $fromUnit, $toUnit);
3. Plane Angles => new PUconverter("angle", $value, $fromUnit, $toUnit);
4. Time => new PUconverter("time", $value, $fromUnit, $toUnit);
5. Volume =>  new PUconverter("volume", $value, $fromUnit, $toUnit);
6. Speed =>  new PUconverter("speed", $value, $fromUnit, $toUnit);
7. Length => new PUconverter("length", $value, $fromUnit, $toUnit);
8. Pressure => new PUconverter("pressure", $value, $fromUnit, $toUnit);
9. Mass => new PUconverter("mass", $value, $fromUnit, $toUnit);
10. Frequency => new PUconverter("frequency", $value, $fromUnit, $toUnit);
11. Energy/Power => new PUconverter("energy", $value, $fromUnit, $toUnit);
12. Disk Storage => new PUconverter("storage", $value, $fromUnit, $toUnit);


**Simple Examples**
```php
use  unitConverter\puconverter\PUconverter;
$length = new PUconverter("length", 3000, 'km', 'm');
echo $length->convert(); //this converts 3000 kilometers to its equivalent meter
```
//Returns 3000000 meters

```php
use  unitConverter\puconverter\PUconverter;
$time = new PUconverter("time", 1, 'yr', 'week');
echo $time->convert(); // this converts 1 year to its equivalent time in weeks
```
//returns 52.143 weeks


## Valid Units

 **Temperature** <br>
 k => Kelvin<br>
 c => celsius<br>
 f => fahrenheit<br>
 
 **Area**<br>
 m2 => Square Meter<br>
 km2 => Square Kilometer<br>
 cm2 => Square Centimeter<br>
 mm2 => Square Millimeter<br>
 ft2 => Square Foot<br>
 mi2 => Square Mile<br>
 ac => Acre<br>
 ha => hectare<br>
 
 **Volume**<br>
 l => Litre<br>
 ml => Millilitre<br>
 m3 => Cubic Meter<br>
 gal => Gallon<br>
 oz => fluid ounces<br>
 ft3 => cubic feet<br>
 cm3 => cubic centi meter<br>
 
 **Mass**<br>
 kg => Kilogram<br>
 g => Gram<br>
 mg => Milligram<br>
 lb => Pound<br>
 t =>  Tonne<br>
 
 **Speed**<br>
 mps => Meters per Second<br>
 kph => Kilometers Per Hour<br>
 mph => Miles Per Hour<br>
 knots => Knots<br>
 
 **Planes Angles**<br>
 deg => Degrees<br>
 rad => Radian<br>
 grad => gradian<br>
 
 **Pressure**<br>
 pa => Pascal<br>
 kpa => kilopascal<br>
 mpa => MegaPascal<br>
 bar => Bar<br>
 mbar => Millibar<br>
 psi => Pound-force per square inch<br>
 
 **Time**<br>
 s => Second<br>
 yr => Year <br>
 month => Month<br>
 week => Week<br>
 day => Day<br>
 hr => Hour<br>
 min => Minute<br>
 ms => Millisecond<br>
 dec => decade<br>
 cen => century<br>
 
 **Energy/Power**<br>
 j => Joule<br>
 kj => Kilojoule<br>
 gcal => Gram calorie<br>
 whr => Watt Hour<br>
 kwhr => Kilowatt Hour<br>
 ev => Electronvolt<br>
 kcal => kilocalorie<br>
 
 **Disk Storage**<br>
 bit => bit<br>
 byte => byte<br>
 kb => kilobyte<br>
 mb => megabyte<br>
 gb => gigabyte<br>
 tb => terabyte<br>
 pb => petabyte<br>
 
 **Frequency**<br>
 hz => hertz<br>
 khz => kilo hertz<br>
 mhz => mega hertz<br>
 ghz => giga hertz<br>
 
 
 **Length**<br>
m - Meter<br>
km - Kilometer<br>
cm - Centimeter<br>
mm - Millimeter<br>
um - Micrometer<br>
nm - Nanometer<br>
in - Inch<br>
ft - Foot<br>
yd - Yard<br>
mi - Mile<br>

## Author
*Initial work- Gracious Emmanuel*

## Contributors
Ordago: https://github.com/ordago

## Contributing
Please, read the **contributing.md** to see contributing process, code of conduct and pull request process.
