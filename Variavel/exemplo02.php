<?php
/*
$anoNascimento ="1985";
$nomeCompleto="";
*/
// na linnha de baixo temos um numero na variavel nome;
$nome1 = "Nilton";
$sobreNome ="Borges";

echo "Nome Completo"." " . $nome1 ." ". $sobreNome . "<br>"; 
echo $nome1 ;
echo "<br>";

//isset verifica se existe a variavel
//unset tira a variavel da memoria
unset($nome1); // pode passar varias variaveis dentro do parenteses passando por virgula

if(isset($nome1)){

echo $nome1;
}

 ?>
