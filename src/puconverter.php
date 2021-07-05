<?php

namespace GeniusGeeek\puconverter;

include 'trait/PUCONVERTER.php';
class PUconverter
{
    public $value;
    public $fromUnitalue;
    public $toUnit;
    public $puconverter;
    
    public function __construct($puconverter, $value, $fromUnit, $toUnit)
    {
        $this->puconverter = $puconverter;
        $this->value = $value;
        $this->fromUnit = $fromUnit;
        $this->toUnit = $toUnit;
    }
    
    
   
    use conversion;
    
     
    
}





