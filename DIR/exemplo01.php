<?php

//variavel com nome do diretorio
$name = "images";

//verifica se o diretorio existe
//mkdir : cria diretorio
//rmdir deleta diretorio
if(!is_dir($name)){
    mkdir($name); 

        echo "diretorio: " . $name . " criado com sucesso!!";
}else{
     rmdir($name);
    echo "Já existe o diretorio: " . $name . "foi removido";
}

?>  