<?php
//por padra esta usando a pasta que esta este arquivo
namespace Cliente;
// extends barra ao contrario volta uma pasta
class Cadastro extends \Cadastro{


        public function regestriarVenda(){

            echo "Foi registrado uma venda para o cliente : " . $this->getNome();
        }

}

?>