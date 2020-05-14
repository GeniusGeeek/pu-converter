# pu-converter
pu-converter also known as PHP-unit-converter is a simple and an easy to use PHP  library for converting mathematical, engineering and scientific units .

# Coverage
pu-converter allows you to convert any unit to any other compatible unit type.

It has no external dependencies, simply include the library in your project and you're set

pu-convertor can handle a wide range of unit types including: 

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

## Guildlines: How to use
1. Call a conversion function 
2. The called conversion function requires three arguements to be passed
3. Arguement 1 is the value to be converted, Arguement 2 is the unit to convert, Argument 3 is the unit to be converted to
4. All units are to be passed in their SI units/abbreviations, example: kilogram is kg, seconds is s, e.t.c.
     
     ###### Valid Units
     **Temperature* *              
      k - Kelvin
      c - Centigrade
      f - Fahrenheit
      
     **Area**
      m2 - Square Meter
      km2 - Square Kilometer
      cm2 - Square Centimeter
      mm2 - Square Milimeter
      ft2 - Square Foot
      mi2 - Square Mile
      ac - Acre
      ha - hectare
      
      **Volume**
      l - Litre
      ml - Mililitre
      m3 - Cubic Meter
      pt - Pint
      gal - Galon
      
      **Mass**
      kg - Kilogram
      g - Gram
      mg - Miligram
      lb - Pound
      oz - Ounce
      t - Metric Tonne
     
      **Speed**
      mps - Meters per Second
      kph - Kilometers Per Hour
      mph - Miles Per Hour
      
      **Plane Angles**
      deg - Degrees
      rad - Radian

      **Pressure**
      pa - Pascal
      kpa - kilopascal
      mpa - MegaPascal
      bar - Bar
      mbar - Milibar
      psi - Pound-force per square inch
      
      **Time**
      s - Second
      year - Year (365 days)
      month - Month (31 days)
      week - Week
      day - Day
      hr - Hour
      min - Minute
      ms - Milisecond
      us - Microsecond
      ns - Nanosecond
      
      Energy/Power
      j - Joule
      kj - Kilojoule
      mj - Megajoule
      ftlb - Foot Pound
      whr - Watt Hour
      kwhr - Kilowatt Hour
      mwhr - Megawatt Hour
      


## Documentation

###### Conversion functions:
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
11. Energy/Power => `energy_converter();
12. Disk Storage => `disk_storage();`




