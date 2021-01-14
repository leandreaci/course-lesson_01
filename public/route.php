<?php

    function getRoute(){
        switch ($_SERVER['REQUEST_URI'])
        {

            case '/action':
                require_once 'veiculo.php';
                break;

            default:
                echo '404';
                return '404';

        }
    }

