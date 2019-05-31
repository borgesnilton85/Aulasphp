<?php

interface Veiculo{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
    
}

// para colocar mais interfaces é so colocar , e a nova interface
class Civic implements Veiculo{
    public function acelerar($velocidade){

        echo "o Veiculo acelerou até " . $velocidade . "Km/h";

    }
   public function frenar($velocidade){
        
        echo "o Veiculo frenou até " . $velocidade . "Km/h";

   }

   public function trocarMarcha($marcha){

        echo " o Veiculo engatou a marcha" . $marcha; 
   }

}

$car = new Civic(); 

$car -> trocarMarcha(1);

?>