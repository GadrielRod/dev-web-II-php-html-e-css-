<!DOCTYPE html>
<html lang="pt=BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade calcular media de idade</title>
</head>
<body>
    <form action = "resultadomedia.php" method="post">
        <label>Idade 1</label><input type="number" min="0" max="200" name="v1" required>
        <label>Idade 2</label><input type="number" min="0" max="200" name="v2"
        required>
        <label>Idade 3</label><input type="number" min="0" max="200" name="v3"
        required>
        <label>Idade 4</label><input type="number" min="0" max="200" name="v4"
        required>
        <button type="submit">calcular</button>
    </form>
</body>
</html>