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

    <form action="/action" method="post">

        <input name="placa" />
        <input name="modelo" />
        <input name="ano" />
        <button type="submit">Gravar</button>

    </form>
</body>
</html>

<?php

    require_once 'Request.php';
    require_once 'route.php';

    $request = new Request();
    echo print_r($request->all());
    echo $request->input('placa');

    getRoute();
