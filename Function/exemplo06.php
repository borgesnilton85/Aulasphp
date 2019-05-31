<?php

$data  = array(
    'nome' => 'Nilton',
    'idade' => 30
);

foreach ($data as &$value) {
    
    if (gettype($value) === 'integer' ) $value +=10; 
    
    echo $value . "<br>";
}

print_r($data);

?>

