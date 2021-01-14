<?php


    function validarVeiculo($request)
    {
        return ! empty($request['placa']) && ! empty($request['modelo']);
    }