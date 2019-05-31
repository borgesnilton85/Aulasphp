<?php

$frase = "A repetição é mãe da retenção";
$palavra = "mãe";
// localiza inicio da palavra
$q = strpos($frase, $palavra);
var_dump($q);
echo "<br>";
// tras o texto do começo ade mãe
$texto =  substr($frase , 0 , $q);
var_dump($texto);
echo "<br>";
//strlen conta caracteres
$texto2 = substr($frase , $q + strlen($palavra) , strlen($frase));
var_dump($texto2);

 ?>
