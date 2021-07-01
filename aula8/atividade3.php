<form method="POST" action="#">
<label>Quantos meses:</label>
<input type="number" name="mes" min="1" max="12" required>
<button action="submit">Enviar</button>
</form>
<?php
class Periodo{
    public function calculo($s){
        return $s * 4.5;
    }
}
    $objeto = new Periodo;
    if($_POST){
    $vlr = $_POST['mes'];
   echo " A quantidade de semanas é ".$objeto -> calculo($vlr);
}

?>