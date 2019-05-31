<?php

if(isset($_COOKIE["NOME_DO_COOKIE"])){
    //json decode cookie vira um objeto.
    $objeto = json_decode($_COOKIE["NOME_DO_COOKIE"]);
    echo $objeto->empresa;
}


?>