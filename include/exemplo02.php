<?php

/*
include "../inc/exemplo01.php << sobe uma pasta e entra na pasta inc"
include "inc/exemplo01.php << entra na pasta inc"
*/

//require obriga que o arquivo exista e que esteja funcionando corretamente senão gera erro fatal
// include tenta executar mesmo que nao exista existe um
//require_once , inchude_once chama apenas uma vez o arquivo caso chame duas vezes ele ignora

require_once "inc/exemplo01.php";
require_once "inc/exemplo01.php";
$resultado = somar(10,10);
echo $resultado;

 ?>
