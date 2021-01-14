<?php

    require_once 'database.php';
    require_once 'validacao.php';

    if(count($_REQUEST))
    {
    //        print_r($_SERVER);
        if(validar($_REQUEST))
        {
            echo salvarVeiculo($_REQUEST);
        }else{
            echo "Placa e modelo não podem ser em branco";
        }
    }
