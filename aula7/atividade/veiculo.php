<!DOCTYPE html>
<html>
   <head>
       <title>veiculos</title>
	   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <script src="css/bootstrap.min.js"></script>
	   <meta charset="utf-8">
   </head>
   <body>
   <form class="container" method="POST" action="fornecedor.php">
    <div class="row">
    <div class="col-md-6">
    <label>Marca:</label>
    <input class="form-control" type="text" name="n" required>
    </div>
    <div class="col-md-6">
    <label>Modelo:</label>
    <input class="form-control" type="text" name="m" required>
    </div>
    <div class="col-md-4">
    <label>COR:</label>
    <input class="form-control" type="text" name="c" required>
    </div>
    <div class="col-md-4">
    <label>Qunatidade:</label>
    <input class="form-control" type="number" name="q" required>
    </div>
    <div class="col-md-4">
    <label>preço:</label>
    <input class="form-control" type="number" name="p" required>
    </div>
				<div class="form-group col-md-12">
				  <label>Descrição sobre o carro</label>
				  <textarea rows="5" class="form-control" id="d" name="d" required></textarea>
			  </div>
    </div>
    <button type="submit" class="btn btn-info">Continuar</button>
    </form>  
   </body>
</html>