<?php
//$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0","sa","root");
$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root","");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :id");

$id = 1;
//liga os parametros passados :login com as variaveis
$stmt->bindParam(":id" , $id);
$stmt->execute();
echo "Dado Deletado com sucesso !!";


?>