<?php

/**
 *
 */
class Pessoa
{

  public $nome = "Rasmus Lerdorf";
  protected $idade = 48; // protected so pode acessar quem esta dendo da propria classe ou classe filha
  private $senha ='asd123'; // private so pode acessar quem esta dendo da propria

  public function verDados()
  {

    echo $this->nome . "<br>";
    echo $this->idade . "<br>";
    echo $this->senha . "<br>";

  }
}

class Programador extends Pessoa
{

  public function verDados()
  {
    echo get_class($this). "<br>";

    echo $this->nome . "<br>";
    echo $this->idade . "<br>";
    echo $this->senha . "<br>"; // senha apresenta erro devido a ser private

  }

}




$objeto = new Programador();

//echo $objeto->senha . "<br>";

$objeto->verDados();



 ?>
