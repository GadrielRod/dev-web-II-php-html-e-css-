<form action="#" method="POST">
      <label>Digite a quantidade de produtos</label><input type="number" name="quantidade"><br>
      <label>Digite o valor dos produtos</label><input type="number" name="valor"><br>
	 <br> 
	 <button type="submit">CALCULAR</button>
</form>
<?php
  if($_POST){
    $valor = $_POST['valor'] ;
    $qauntidade = $_POST['quantidade'];
    $total = ($valor * $qauntidade);
    echo "O valor total dos produtos é $total R$";
  }
?>