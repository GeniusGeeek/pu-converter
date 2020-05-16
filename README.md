# pu-converter
pu-converter also known as PHP-unit-converter is a simple and an easy to use PHP  library for converting mathematical, engineering and scientific units .

# Coverage
pu-converter allows you to convert any unit to any other compatible unit type.

It has no external dependencies, simply include the library in your project and you're set

pu-converter can handle a wide range of unit types including: 

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

## Installing
Using pu-converter is as simple as including the library in your project

```
include '/path/to/puconverter.php';
```

## Guidelines: How to use
1. Call a conversion function 
2. The called conversion function requires three arguements to be passed
3. Argument 1 is the value to be converted, Arguement 2 is the unit to convert, Argument 3 is the unit to be converted to
4. All units are to be passed in their SI units/abbreviations, example: kilogram is kg, seconds is s, e.t.c.
     
    
      
# Documentation

## Conversion functions

The following functions are to be called when converting from any of the below SI Units:

1. Temperature => `temperature_converter();`
2. Area => `area_converter();`
3. Plane Angles => `angles_converter();`
4. Time => `time_converter();`
5. Volume => `volume_converter();`
6. Speed => `speed_converter();`
7. Length => `length_converter();`
8. Pressure => `pressure_converter();`
9. Mass => `mass_converter();`
10. Frequency => `frequency_converter();`
11. Energy/Power => `energy_converter();`
12. Disk Storage => `disk_storage();`

**Simple Examples**
```
teperature_converter(30,'c','k'); //this converts 30 degree celcuius to its equivalent kelvin temperature
```
//Returns 303.15 kelvin
```
time_converter(360,'s','min'); // this converts 360 seconds to it equivalent minutes
```
//returns 6 minutes

**More Examples**

This example looks into working with forms and web apps
```
<form method="POST" action="file.php">
<!-- converting cm to other length units -->
<input type="text" name="val">
<input type="submit" name="submit">
</form>

<?php
if(isset($_POST["submit"])){
$x = $_POST["val"];
$y = "cm";
//$x is the value to convert, $y is the unit of the value to convert.
 echo length_converter($x,$y,"m");
 echo length_converter($x,$y,"mm");
 echo length_converter($x,$y,"km");
  }

?>
```

```
<form method="POST" action="file.php">
<!-- converting length unit (user specified) -->
Convert :<input type="text" name="val">
Convert from:<input type="text" name="unit1">
convert to:<input type="text" name="unit2>
<input type="submit" name="submit">
</form>

<?php
if(isset($_POST["submit"])){
$x = $_POST["val"];
$y = $_POST["unit1"];
$z = $_POST["unit2"];
//$x is the value to convert, $y is the unit of the value to convert, $z is the unit to convert to
 echo length_converter($x,$y,$z);
 echo length_converter($x,$y,$z);
 echo length_converter($x,$y,$z);
  }

?>
```

## Valid Units

 **Temperature** 
 k => Kelvin
 c => celsius
 f => fahrenheit
 
 **Area**
 m2 => Square Meter
 km2 => Square Kilometer
 cm2 => Square Centimeter
 mm2 => Square Millimeter
 ft2 => Square Foot
 mi2 => Square Mile
 ac => Acre
 ha => hectare
 
 **Volume**
 l => Litre
 ml => Millilitre
 m3 => Cubic Meter
 gal => Gallon
 oz => fluid ounces
 ft3 => cubic feet
 cm3 => cubic centi meter
 
 **Mass**
 kg => Kilogram
 g => Gram
 mg => Milligram
 lb => Pound
 t =>  Tonne
 
 **Speed**
 mps => Meters per Second
 kph => Kilometers Per Hour
 mph => Miles Per Hour
 knots => Knots
 
 **Planes Angles**
 deg => Degrees
 rad => Radian
 grad => gradian
 
 **Pressure**
 pa => Pascal
 kpa => kilopascal
 mpa => MegaPascal
 bar => Bar
 mbar => Millibar
 psi => Pound-force per square inch
 
 **Time**
 s => Second
 year => Year 
 month => Month
 week => Week
 day => Day
 hr => Hour
 min => Minute
 ms => Millisecond
 dec => decade
 cen => century
 
 **Energy/Power**
 j => Joule
 kj => Kilojoule
 gcal => Gram calorie
 whr => Watt Hour
 kwhr => Kilowatt Hour
 ev => Electronvolt
 kcal => kilocalorie
 
 **Disk Storage**
 bit => bit
 byte => byte
 kb => kilobyte
 mb => megabyte
 gb => gigabyte
 tb => terabyte
 pb => petabyte
 
 **Frequency**
 hz => hertz
 khz => kilo hertz
 mhz => mega hertz
 ghz => giga hertz
 
 
 **Length**
m - Meter
km - Kilometer
cm - Centimeter
mm - Millimeter
um - Micrometer
nm - Nanometer
in - Inch
ft - Foot
yd - Yard
mi - Mile

## Author
*Initial work- Gracious Emmanuel

## Contributing
Please, read the **contributing.md** to see contributing process, code of conduct and pull request process



     




