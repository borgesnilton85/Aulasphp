<?php

// converte o timestamp de uma data especifica aceita expressoes
//$ts = strtotime("2001-09-11");
//$ts = strtotime("now");
//$ts = strtotime("+1 day");
$ts = strtotime("+1 week");

echo $ts ;
echo "<br>";
echo date("l, d/m/y" , $ts);
echo "<br>";
echo "<br>";
echo "<br>";

?>