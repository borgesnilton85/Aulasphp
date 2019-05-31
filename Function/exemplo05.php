<?php
/**
 * passagem de parametro por valor
 */
$a = 10;

function trocaValor($a){

    $a = 50;
    return $a;

}


echo  trocaValor($a);
echo "<br>";
echo $a; 
echo "<hr>";


/**
 * passagem de parametro por Referencia na memoria 
 */
$a = 10;

function trocaValor1(&$a){

    $a += 50;
    return $a;

}


echo  trocaValor1($a);
echo "<br>";    
echo  trocaValor1($a);
echo "<br>";
echo $a; 





?>