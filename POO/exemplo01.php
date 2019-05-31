<?php
// criando uma classe
class Pessoa{
    public $nome; // atributo
    

    /***INICIO metodo falar  */
    public function falar(){

        return "O meu nome é " . $this -> nome ;
    }
    /***TERMINO metodo falar  */
}

$glaucio = new Pessoa();

$glaucio ->nome= "Glaucio Daniel";

echo $glaucio->falar();

?>





