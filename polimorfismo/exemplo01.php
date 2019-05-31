<?php

abstract class Animal{
    public function falar(){
        return som;
    }
     public function mover(){
        return "Andar";
    } 
}


// polimorfismo é quando cria um metodo com mesmo nome da classe extendida

class Cachorro extends Animal{

    public function falar(){
        return "Late";
    }

}

class Gato extends Animal{

    public function falar(){
        return "Mia";
    }

}

class Passaro extends Animal{

    public function falar(){
        return "Canta";
    }

    public function mover(){
        //metodo mover faz polimorfismo
        //parent::mover chama tbm da classe animal o metodo mover
        return "Voar e " . parent::mover();
    }

}


$pluto = new Cachorro();
echo $pluto->falar(); 
echo '<br>';
echo $pluto->mover();

echo '<br>';
echo '<br>';
echo '<br>'; 

$garfield = new Gato();
echo $garfield->falar(); 
echo '<br>';
echo $garfield->mover();
echo '<br>';

echo '<br>';
echo '<br>';
echo '<br>';

$ave = new Passaro();
echo $ave->falar(); 
echo '<br>';
echo $ave->mover();
echo '<br>';

?>