<!DOCTYPE html>
<html lang="pt=BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>resultado da media</title>
</head>
<body>
    <h1>Resultado da media da idade dos alunos</h1>
    <?php
    $v1 = $_POST['v1'];
    $v2 = $_POST['v2'];
    $v3 = $_POST['v3'];
    $v4 = $_POST['v4'];
    $resultado = ($v1 + $v2 + $v3 + $v4)/4;
    echo " A media da idade dos alunos é <b>$resultado</b>"
    ?>
</body>
</html>