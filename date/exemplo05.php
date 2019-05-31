<?php


$dt = new DateTime();

$periodo = new DateInterval("P20DT20H");
echo $dt->format("d/m/y h:i:s A"). "<br>";

$dt->add($periodo);

echo $dt->format("d/m/y h:i:s A");




?>