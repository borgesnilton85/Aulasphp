<?php

$hierarquia = array(
    array(
        'nome_cargo'=> 'CEO',
        'subordinados' =>array(
            //Inicio: Diretor Comercial
            array(
                'nome_cargo' =>'Diretor Comercial',
                'subordinados' =>array(
                //Inicio Gerente de Vendas
                    array('nome_cargo' => 'Gerente de Vendas')
                )
                //Termino Gerente de Vendas    
                ),
            //Termino: Diretor Comercial
            //Inicio: Diretor Financeiro
            array(
                'nome_cargo'=>'Diretor Financeiro',
                'subordinados'=>array(
                    //inicio: gerente de contas a pagar
                    array(
                        'nome_cargo'=> 'Gerente de Contas a Pagar',
                        'subordinados' => array(
                            //Inicio: Supervisor de Pagamentos 
                            array(
                                'nome_cargo'=> 'Supervisor de Pagamentos'
                            )

                            //Termino: Supervisor de Pagamentos
                        )
                    ),
                    // Terminio Gerente de Contas a pagar
                    //Inicio: Gerente de Compras
                    array(
                        'nome_cargo' => 'Gerente de Compras',
                        'subordinados' => array(
                            // Inicio: Supervisor de Suprimentos
                            array(
                                'nome_cargo' => 'Supervisor de Suprimentos',
                                'subordinados'=> array(
                                    //inicio funcionarios

                                    array(
                                        'nome_cargo' =>'Funcionario',
                                        'estagiarios' => array(
                                            array(
                                                'nome_cargo'=> 'Estagiarios'
                                            )
                                        )

                                    )

                                    //terino funcionarios
                                )
                            
                            )
                            //Termino: Supervisor de Suprimentos
                        )
                    )
                    //Termino: Gerente de Compras
                )
            )
            //Termino: Diretor Financeiro
        )
    )
);

function exibe($cargos){

    $html = '<ul>';

    foreach ($cargos as $cargo) {
        $html .='<li>';
        $html .= $cargo['nome_cargo'];

        if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
            $html .= exibe($cargo['subordinados']);
            
        }else if(isset($cargo['estagiarios']) && count($cargo['estagiarios']) > 0){
            $html .= exibe($cargo['estagiarios']);
           
        }
     
        $html .='</li>';
    }

    $html .='</ul>';

    return $html;

}

echo exibe($hierarquia);    

?>