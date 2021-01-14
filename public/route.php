<?php

    function getRoute(){
        switch ($_SERVER['REQUEST_URI'])
        {

            case '/veiculo':
                require_once 'veiculo.php';
                break;

            case '/':
                echo "<h1>Index</h1>";
                break;

            default:
                echo '<h1>404</h1>';
                return '404';

        }
    }

