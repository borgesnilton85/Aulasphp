<?php

$data = array(
"empresa"=>'HCODE'
);

//setcookie("NOME_DO_COOKIE" ,o que sera armazenado no cookie,dureção do cookie);

setcookie("NOME_DO_COOKIE" , json_encode($data), time() + 3600);


echo "OK";


?>