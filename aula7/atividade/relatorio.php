<!DOCTYPE html>
<html>
   <head>
       <title>veiculos</title>
	   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <script src="css/bootstrap.min.js"></script>
	   <meta charset="utf-8">
   </head>
   <body>
<?php
if($_POST){
    $q = $_POST['q'];
    $p = $_POST['p'];
    $total = ($q * $p);
}
?>

   <form class="container" method="POST" action="relatorio.php">
    <div class="row">
    <div class="col-md-6">
    <label>Marca:</label>
    <input class="form-control" type="text" name="n" readonly value="<?php echo $_POST['n']; ?>">
    </div>
    <div class="col-md-6">
    <label>Modelo:</label>
    <input class="form-control" type="text" name="m" readonly value="<?php echo $_POST['m']; ?>">
    </div>
    <div class="col-md-4">
    <label>COR:</label>
    <input class="form-control" type="text" name="c" readonly value="<?php echo $_POST['c']; ?>">
    </div>
    <div class="col-md-4">
    <label>Qunatidade:</label>
    <input class="form-control" type="number" name="q" readonly value="<?php echo $_POST['q']; ?>">
    </div>
    <div class="col-md-12">
    <label>preço:</label>
    <input class="form-control" type="number" name="p" readonly value="<?php echo $_POST['p']   ; ?>">
    </div>
    </div>
	<div class="form-group col-md-12">
	<label>Descrição sobre o carro:</label>
	<textarea rows="5" class="form-control" id="d" name="d" readonly><?php echo $_POST['d']; ?></textarea>
	</div>
    <div class="col-md-6" >
    <label>Nome:</label>
    <input class="form-control" type="text" name="nome" value="<?php echo $_POST['nome']; ?>" >
    </div>
    <div class="col-md-6">
    <label>CNPJ:</label>
    <input class="form-control" type="text" name="cnpj" value="<?php echo $_POST['cnpj']; ?>">
    </div>
    <div class="col-md-6">
    <label>Valor total da compra:</label>
    <input class="form-control" type="text" readonly value="<?php echo "$total". " R$"; ?>">
    </div>
    </div>
    </div>
    </form>  
   </body>
</html>