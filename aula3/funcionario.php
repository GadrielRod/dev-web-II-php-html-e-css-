<form action="#" method="post">
      <label>NOME </label><input type="text" name="nome"><br>
	 <label>Salario </label><input type="number" name="salario"><br>
	 <label>Carga horaria por semana</label><input type="number" name="horas"><br>
	
	 <br> 
	 <button type="submit">CALCULAR</button>
</form>
<?php
  if($_POST){
	    $n = $_POST['nome'];
	    $x = $_POST['salario'];
        $y = $_POST['horas'];
        $salarioFinal = ($x * $y);
     echo " o funcionario $n recebe $salarioFinal R$ por mês ";
  }
		
?>