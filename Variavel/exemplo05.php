<?php
$nome = "Glaucio";

function teste(){
  global $nome;
  echo $nome;
}

function teste2(){

//  $nome = "Pedro";
  echo $nome;
}

teste();
teste2();

 ?>
