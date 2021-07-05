<?php

namespace GeniusGeeek\puconverter;

include 'conversionClasses/TemperatureConverter.php';
include 'conversionClasses/AreaConverter.php';
include 'conversionClasses/AngleConverter.php';
include 'conversionClasses/TimeConverter.php';
include 'conversionClasses/VolumeConverter.php';
include 'conversionClasses/SpeedConverter.php';
include 'conversionClasses/LengthConverter.php';
include 'conversionClasses/PressureConverter.php';
include 'conversionClasses/MassConverter.php';
include 'conversionClasses/FrequencyConverter.php';
include 'conversionClasses/EnergyConverter.php';
include 'conversionClasses/StorageConverter.php';



trait conversion
{

  public function convert()
  {
    if (strtolower($this->puconverter) == "temperature") {
      $convert =  new Temperature();
      return $convert->temperature_converter($this->value, $this->fromUnit, $this->toUnit);
    } else if (strtolower($this->puconverter) == "area") {
      $convert = new Area();
      return $convert->area_converter($this->value, $this->fromUnit, $this->toUnit);
    } else if (strtolower($this->puconverter) == "angle") {
      $convert = new Angle();
      return $convert->angles_converter($this->value, $this->fromUnit, $this->toUnit);
    } else if (strtolower($this->puconverter) == "time") {
      $convert = new Time();
      return $convert->time_converter($this->value, $this->fromUnit, $this->toUnit);
    } else if (strtolower($this->puconverter) == "volume") {
      $convert = new Volume();
      return $convert->volume_converter($this->value, $this->fromUnit, $this->toUnit);
    } else if (strtolower($this->puconverter) == "speed") {
      $convert = new Speed();
      return $convert->speed_converter($this->value, $this->fromUnit, $this->toUnit);
    } else if (strtolower($this->puconverter) == "length") {
      $convert = new Length();
      return $convert->length_converter($this->value, $this->fromUnit, $this->toUnit);
    } else if (strtolower($this->puconverter) == "pressure") {
      $convert = new Pressure();
      return $convert->pressure_converter($this->value, $this->fromUnit, $this->toUnit);
    } else if (strtolower($this->puconverter) == "mass") {
      $convert = new Mass();
      return $convert->mass_converter($this->value, $this->fromUnit, $this->toUnit);
    } else if (strtolower($this->puconverter) == "frequency") {
      $convert = new Frequency();
      return $convert->frequency_converter($this->value, $this->fromUnit, $this->toUnit);
    } else if (strtolower($this->puconverter) == "energy") {
      $convert = new Energy();
      return $convert->energy_converter($this->value, $this->fromUnit, $this->toUnit);
    } else if (strtolower($this->puconverter) == "storage") {
      $convert = new Storage();
      return $convert->disk_storage($this->value, $this->fromUnit, $this->toUnit);
    }
  }
}
