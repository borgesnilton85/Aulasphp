<?php

$conn = new mysqli("localhost","root","","dbphp7");

if($conn->connect_error){
  echo "ERROR: " . $conn->connect_error;
  exit;
}


$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) VALUES (?,?)"); 

//$stmt->bind_param("ss()é o tipo de parametro que é pra passar no caso duas string")
//$stmt->bind_param("ss",parametro1,parametro2)
//é necessario passar os parametros por variaveis

$login = "user";
$senha = "123456";


$stmt->bind_param("ss",$login, $senha);
$stmt->execute();

//para inserir novo usuario basta passar novamente valores na variavel

$login ="root";
$senha = "!@w#";
$stmt->execute();

?>
