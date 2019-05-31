<?php
$file =fopen("teste.txt", "w+");

fwrite($file , "texto de exemplo");

fclose($file);
//unlink exclui arquivo
unlink("teste.txt");

echo "arquivo removido "

?>