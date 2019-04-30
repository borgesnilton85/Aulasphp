<?php


$nome = $_GET["a"];
var_dump($nome);
echo "<br>";
$num = (int) $_GET["b"]; /// converte em inteiro
var_dump($num);
echo "<br>".$nome;

echo "<br>";

$ip = $_SERVER["REMOTE_ADDR"];
$acesso= $_SERVER["SCRIPT_NAME"];

echo $ip;
echo "<br>".$acesso;
 ?>
