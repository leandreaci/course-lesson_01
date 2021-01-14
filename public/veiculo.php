<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Veiculo</h1>

<form action="/veiculo" method="post">

    <div class="">
        <label>Placa</label>
        <input name="placa"/>
    </div>
    <div class="">
        <label>Modelo</label>
        <input name="modelo"/>
    </div>
    <div class="">
        <label>Ano</label>
        <input name="ano"/>
    </div>

    <div class="">
        <button type="submit">Gravar</button>
    </div>
</form>
</body>
</html>

<?php

require_once 'Veiculo.php';

// SE O FORMULARIO TIVER SIDO ENVIADO SALVA
if (count($_REQUEST)) {
    $veiculo = new Veiculo();
    $veiculo->salvar();
} else {
    echo 'Digite alguma coisa';
}

