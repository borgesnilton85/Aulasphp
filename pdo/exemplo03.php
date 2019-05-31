<?php
//$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0","sa","root");
$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root","");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN , :SENHA)");

$login = "José";
$password = "123465";

//liga os parametros passados :login com as variaveis
$stmt->bindParam(":LOGIN" , $login);
$stmt->bindParam(":SENHA", $password);

$stmt->execute();
echo "Inserido ok";


?>