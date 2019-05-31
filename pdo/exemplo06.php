<?php
//$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0","sa","root");
$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root","");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

//outra forma de passar os parametros 
$stmt->execute(array($id));


//$conn->rollBack();
$conn->commit();

echo "Dado Deletado com sucesso !!";


?>