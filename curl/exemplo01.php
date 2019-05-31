<?php

$cep ="13054442";
// api para trazer o cep
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

curl_setopt($ch , CURLOPT_RETURNTRANSFER , 1); // 1 OU 0 É PRA SABER SE QUER OU NAO UM RETORNO
curl_setopt($ch , CURLOPT_SSL_VERIFYPEER , 0); // se o opção for verdadeira exige uma validação ssl no caso false


$response = curl_exec($ch);// aqui executa o envio para url

curl_close($ch);

$data = json_decode($response , true);


print_r($data);

//print_r($data["localidade"]);



?>