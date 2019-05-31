<?php
// todo metodo magico começa com undeline underline
// criar metodo construtor __construct


class Endereco{
    private $logradouro; 
    private $numero;
    private $cidade;

    //criando metodo construtor

    public function __construct($a, $b, $c) {

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;

    }

 // metodo desconstrutor é o ultimo metodo executado antes de sair da memoria

    public function __destruct(){
     var_dump("destruir");
        
    }

    /**
     * converte o objeto em string 
     * quando por exemplo 
     * da um echo $objeto chama este metodo
     */
    public function __toString(){
        return $this->logradouro . " , " . $this->numero . " --" . $this->cidade;
    }
   
}
    $end = new Endereco("RUA A",21 , "Campinas");
   

    var_dump($end);
    echo "<br>";
    echo $end;
    echo "<br>";
    unset($end);

    

?>