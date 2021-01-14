<?php

require_once 'database.php';
require_once 'validacao.php';

class Veiculo
{

    public function salvar()
    {
        if(validarVeiculo($_REQUEST))
        {
            echo salvarVeiculo($_REQUEST);
        }else{
            echo "Placa e modelo não podem ser em branco";
        }
    }

}


