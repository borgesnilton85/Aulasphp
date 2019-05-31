<?php
// variavel $file é to tipo resorce
//$file = fopen("log.txt","w+"); // w+ cria apaga o que esta escrito e reescreve
$file = fopen("log.txt","a+"); // a+mantem o que esta escrito ee adiciona 
fwrite($file,date("Y-m-d H:i:s") . "\r\n");

fclose($file);
echo "arquivo criado com sucesso";

?>