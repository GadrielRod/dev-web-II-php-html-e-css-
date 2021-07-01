<form method = "post" action = "#">
<label>Quantos veiculos você quer adicionar?</label>
<input type="number" name="qtd">
<button type = "submit">OK</button>
<br>
</form>
<?php
if($_POST){
$x = $_POST['qtd'];
$i = 1;
while($i<=$x){
    echo "<label>$i ° Placa:</label><input name='$i' type='text'>
          <label>Marca:</label><input name='$i' type='text'>
          <label>Modelo:</label><input name='$i' type='text'>
          <label>Ano:</label><input name='$i' type='number'>
          <label>Preço:</label><input name='$i' type='text'>
          <label>Cor do veiculo:</label><input name='$i' type='text'> <br>";
    $i = $i + 1;
    }
}
?>