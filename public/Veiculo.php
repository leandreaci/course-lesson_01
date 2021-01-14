<?php

require_once 'database.php';
require_once 'validacao.php';
require_once 'Request.php';

class Veiculo
{

    public function salvar()
    {
        $request = new Request();

        if(validarVeiculo($request->all()))
        {
            echo salvarVeiculo($request->all());
        }else{
            echo "Placa e modelo não podem ser em branco";
        }
    }

    public function atualizar()
    {

    }

}


