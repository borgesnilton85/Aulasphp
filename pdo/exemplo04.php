<?php
//$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0","sa","root");
$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root","");

$stmt = $conn->prepare("UPDATE tb_usuarios set deslogin = :LOGIN , dessenha=:SENHA WHERE idusuario = :id");

$login = "João";
$password = "qwerty";
$id = 2;
//liga os parametros passados :login com as variaveis
$stmt->bindParam(":LOGIN" , $login);
$stmt->bindParam(":SENHA", $password);
$stmt->bindParam(":id" , $id);
$stmt->execute();
echo "Dados alterados com sucesso !!";


?>