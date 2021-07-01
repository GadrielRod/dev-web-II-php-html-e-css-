<!DOCTYPE html>
<html>
	<head>
	   <title>CADASTRO FUNCIONÁRIO</title>
	   <link rel="stylesheet" type="text/css" 
	                       href="css/bootstrap.min.css">
	   <script src="css/bootstrap.min.js"></script>
	   <meta charset="utf-8">
	</head>
	<body>
	   <div class="container">
			<form method="POST" action="#">
			    <div class="row" style="border-top:1px solid #222;
				border-bottom:1px solid #222;padding-bottom:10px;">
				    <div class="col-7">
				       <label>NOME:</label>
					   <input class="form-control" type="text" name="nome">
				    </div>
				    <div class="col-3">
				       <label>NASCIMENTO:</label>
					   <input class="form-control" name="nascimento" max="2002-09-30" type="date">
				    </div>
			    </div>
				
				<div class="row">
				    <div class="col-3">
				       <label>SALÁRIO:</label>
					   <input class="form-control" type="number" name="salario" min="1">
				    </div>
				    <div class="col-7">
				        <label>CH DIÁRIA:</label>
					    <div class="row">
							 <input type="radio" value="4" name="ch" class="form-control col-1">4H
							 <input type="radio" value="6" name="ch" class="form-control col-1">6H
							 <input type="radio" value="8" name="ch" class="form-control col-1">8H
						</div> 
				    </div>
			    </div>
				<div class="row" style="float:right;">
				    <button class="btn btn-danger" type="cancel">LIMPAR</button>
				   	<button class="btn btn-success" type="submit">CONFIRMAR</button>
				</div>
			</form>	
			<?php   
			   if($_POST and $_POST['salario']>0 and $_POST['ch']>0 and
               isset($_POST['ch']) and isset($_POST['salario'])
			   ){
				require_once('parte1.php'); 
				$obj = new FP;
                $obj->setSalario($_POST['salario']);
				$obj->setCHDiaria($_POST['ch']);	
			?>
	          	<div class="row">
				   <div class="col-4">
				       <label>CH Mensal: </label>
					   <?php
					      echo $obj->getCHMensal();
					   ?>					   
				   </div>
				   <div class="col-4">
				       <label>CH Mensal: </label>
					   <?php
					      echo $obj->getCHMensalG();
					   ?>	
				   </div>
				   <div class="col-4">
						<label>INSS: </label>
					   <?php
					      echo ($obj->getAliquotaINSS()*100)."%";
						  echo ", corresponde a R$".
						  ($obj->getAliquotaINSS()*$obj->getSalario());
					   ?>	
				   </div>
                   <div class="col-4">
						<label>IRFF:</label>
					   <?php
					      echo ($obj->getIRRF()*100)."%";
                          echo ", corresponde a R$".($obj->getSalario()*$obj->getIRRF());
                          echo " Valor final é R$". ($obj->getSalario()*$obj->getIRRF()-$obj->getDeducao()); 
					   ?>	
				   </div>
                </div> 			
            <?php 			
			   }
			?>
	   </div>
	   
	</body>
</html>