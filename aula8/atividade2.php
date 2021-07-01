<form method="POST" action="#">
<label>Quantos meses:</label>
<input type="number" name="mes" min="1" max="12" required>
<button action="submit">Enviar</button>
</form>
<?php  
class Periodo{ 
  public function dia($d){
      return $d;
  }
}
  $p = new Periodo;
  $mes = $_POST['mes'];
  $total = ($mes * $p -> dia(30));
  echo " o total de dia é $total" ;
?>