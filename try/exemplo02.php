<?php


function trataNome($nome){
    if(!$nome){
        throw new Exception("Nenhum nome foi informado", 1);
        
    }
   echo ucfirst($nome) . "<br>";
}




try {

    trataNome("joão");
    trataNome("");

} catch (Exception $e) {

    echo $e->getMessage();    

}finally{
    //bloco finally sempre é executado quando entra no trycatch
    echo "<br>executou o bloco try";

}

?>