<?php

require_once("config.php");
/*
$sql = new Sql();
$usuario = $sql->select("select * from tb_usuarios");
echo json_encode($usuario);
*/



// carrega um usuario
/*
$usuario = new Usuario();
$usuario->loadByID(4);
echo $usuario;
*/


// carrega lista de usuario
/*
$lista = Usuario::getList();
echo json_encode($lista);
*/

//buca usario
/*
$procurar = Usuario::search("jo");
echo json_encode($procurar);
*/

//LOGAR
/*
$logar = new Usuario();
$logar->login("root","!@w#");
echo $logar;
*/

//$aluno = new Usuario();
//$aluno->setDesLogin("usuario");
//$aluno->setDesSenha("senha");
//$aluno = new Usuario("aluno" , "321654");
//$aluno->insert();
//echo $aluno;
//alterar usuario

/*
$usuario = new Usuario();
$usuario->loadByID(8);
echo $usuario;
$usuario->update("professor123", "senhaNova123");
echo $usuario;
*/
$usuario = new Usuario();
$usuario->loadByID(9);
$usuario->delete();
echo $usuario;


?>