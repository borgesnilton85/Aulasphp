<?php

require_once("config.php");



// unset(nome da sessao) apaga apenas a session nome
// com session_unset() => apaga todas as sessions 
/**
 * diferençã entre session_unset e session_distroy()
 *  session_unset() => limpa a variavel mas voce continua existindo para o site
 * session_distroy()=> limpa a variavel e remove o usuario 
 */
//unset($_SESSION['nome']);
//session_unset();
//session_destroy();

echo $_SESSION['nome']; 

?>