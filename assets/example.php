<?php 
include '../puconverter.php';

$result = temperature_converter(30,'c','k');
echo $result.'K';
echo "<br>";
$result = time_converter(360,'s','min');
echo $result.' '.'minutes';

?>
