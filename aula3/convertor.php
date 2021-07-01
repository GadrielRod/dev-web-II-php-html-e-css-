<form action="#" method="POST">
      <label>Valor a ser convertido </label><input type="number" name="valor"><br>
	
	 <br> 
	 <button type="submit">CALCULAR</button>
</form>
<?php
  if($_POST){
    $dolar = $_POST['valor'] ;
    $real = 5.24;
    
    $convertor = ($real * $dolar);
    echo "O seu valor convertido é $convertor dolares";
  }
?>