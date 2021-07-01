<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	   <script src="css/bootstrap.min.js"></script>
    <title>Produto</title>
</head>
<body>
<?php
if($_POST){
    $nome = $_POST['n'];
    $cpf = $_POST['c'];
}else{
    header("Location:pessoa.php");
}

?>

<form class="container" method="POST" action="finalizar.php">
<div class="row">
    <div class="col-md-6">
    <label>NOME:</label>
    <input class="form-control"value="<?php echo $_POST['n']; ?>" readonly type="text" name="n">
    </div>
    <div class="col-md-4">
    <label>CPF:</label>
    <input  class="form-control" readonly value="<?php echo $_POST['c']; ?>" type="text" name="c">
    </div>
    <div class="col-md-6">
    <label>Produto:</label>
    <input class="form-control" type="text" name="p">
    </div>
    <div class="col-md-6">
    <label>preço:</label>
    <input class="form-control" type="text" name="v">
    </div>
    </div>
    <button type="submit" class="btn btn-info">FINALIZAR</button>
    </form>
</body>
</html>