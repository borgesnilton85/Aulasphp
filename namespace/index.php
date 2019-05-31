<?php

require_once("config.php");

// use -> usa a classe que esta na namespace cliente "Cadastro.php"

//padrao use Namespace\classe
use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Dijalma Sindeaux");
$cad->setEmail("dijal@hcode.com.br");
$cad->setSenha("123456");

//echo $cad;

$cad->regestriarVenda();

?>