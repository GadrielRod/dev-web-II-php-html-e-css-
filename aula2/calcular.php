<!DOCTYPE html>
<html lang="pt=BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula do dia 15.09.2020</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php
    $v1 = $_POST['v1'];
    $v2 = $_POST['v2'];
    $resultado = ($v1/$v2)*100;
    echo "O primeiro valor representa<b> $resultado% </b> do segundo valor"
    ?>
</body>
</html>