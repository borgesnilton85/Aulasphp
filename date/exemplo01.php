<?php


// o função date espera pelo menos um parametro exempl d/m/Y  "Y" maiusculo mostra o ano com 4 digitos
echo date("d/m/Y H:i:s");

echo "<br>";
//pegar timetamp (valor em segundos desde 1 jan de 1970)

echo time();

//passado parametro para travar a hora
echo "<br>";
echo date("d/m/Y H:i:s", 1557845827);
?>