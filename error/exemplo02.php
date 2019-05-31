<?php
/** error_reporting altera a configuração de exibição de erro
 * 
 * no exemplo o erro notice é ignorado 
 * o til segnifica nao mostrar o e_notice
*/

error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET["nome"];

echo $nome;
?>