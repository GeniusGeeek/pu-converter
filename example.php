<?php 
include 'puconverter.php';
$length = new PUconverter("length", 3000, 'km', 'm');
echo $length->convert();
echo "<br>";
$time = new PUconverter("time", 1, 'yr', 'week');
echo $time->convert();
echo "<br>";
$temperature = new PUconverter("temperature", 30, 'c', 'k');
echo $temperature->convert();
$angle = new PUconverter("angle", 180, 'deg', 'rad');
echo $angle->convert();


?>
