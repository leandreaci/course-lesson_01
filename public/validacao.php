<?php


    function validar($request)
    {
        return ! empty($request['placa']) && ! empty($request['modelo']);
    }