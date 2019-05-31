<?php
function ola(){

  $argumentos = func_get_args(); // função que pega todos os argumento passados sem necessidade de criar

  return $argumentos ;
}

var_dump(ola("bom dia",10));

 ?>
