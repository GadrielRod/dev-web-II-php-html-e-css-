<!DOCTYPE html>
<html>
   <head>
       <title>Cadastro</title>
	   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <script src="css/bootstrap.min.js"></script>
	   <meta charset="utf-8">
   </head>
   <body>
     <div class="container">
         <form method="post" action="verifica.php">
			  <div class="form-row">
				<div class="form-group col-md-6">
				  <label for="nome">Nome</label>
				  <input type="text" name="nome" class="form-control" id="nome">
				</div>
				<div class="form-group col-md-3">
				  <label for="rg">RG</label>
				  <input type="text" class="form-control" name="rg" id="rg">
				</div>
			  
			    <div class="form-group col-md-3">
			 	   <label for="cpf">CPF</label>
				   <input type="text" name="cpf" class="form-control" id="cpf">
			     </div>
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-6">
			     	<label for="log">Logradouro</label>
				    <input type="text" name="log" class="form-control" id="log" placeholder="Rua, Av, Beco...">
			    </div>
				<div class="form-group col-md-2">
			     	<label for="num">Número</label>
				    <input type="number" name="num" class="form-control" id="num">
			    </div>
				<div class="form-group col-md-4">
			     	<label for="comp">Complemento</label>
				    <input type="text" name="complemento" class="form-control" id="comp">
			    </div>
				
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-4">
			     	<label for="bairro">Bairro</label>
				    <input type="text" name="bairro" class="form-control" id="bairro">
			    </div>
				<div class="form-group col-md-4">
				  <label for="cidade">Cidade</label>
				  <select class="form-control" id="cidade" name="cidade">
				      <option value="Alvorada">Alvorada</option>
					  <option value="Canoas">Canoas</option>
					  <option value="Esteio">Esteio</option>
					  <option value="Gravataí">Gravataí</option>
					  <option value="Porto Alegre">Porto Alegre</option>
				  </select>
				</div>
				 <div class="form-group col-md-4">
			     	<label for="cep">CEP</label>
				    <input type="text" name="cep" class="form-control" id="cep">
			    </div>
			  </div>	
			  <div class="form-row">
				<div class="form-group col-md-12">
				  <label for="desc">Descreva o lugar</label>
				  <textarea rows="5" class="form-control" id="desc" name="desc"></textarea>
				</div>
			  </div>
			  <button type="submit" class="btn btn-primary">Confirmar</button>
			</form>
	 </div> 
   </body>
</html>