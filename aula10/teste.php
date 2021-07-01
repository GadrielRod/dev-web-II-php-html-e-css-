<form method="POST" action="#">
<label>Quantos meses:</label>
<input type="text" name="valor" required>
<button action="submit">Enviar</button>
</form>
<?php
class FP {
private $salario;
public function setSalario($s){
	$this->salario = $salario;
}

public function getSalario(){
	return $this->salario;
}
public function salarioMensal($salario){
	if($salario<=1045.00){
		$INSS = $salario * 0.075;
		$total = $INSS + $salario;
	}else if($salario > 1045 and $salario <= 2089.60){
		$INSS = $salario * 0.09;
		$total = $INSS + $salario;
	}else if($salario > 2089.60 and $salario<=3134.40){
		$INSS = $salario * 0.12;
		$total = $INSS + $salario;
	}else if($salario > 3140.40 and $salario<=6101.06){
		$INSS = $salario * 0.14;
		$total = $INSS + $salario;
	}else{

		$INSS = $salario * 0.14;
		$total = $INSS + $salario;
	}
	return $total;
}
}
if($_POST){
	$objeto = new FP;
    $vlr = $_POST['valor'];
   echo " A quantidade de semanas é ".$objeto ->salarioMensal($vlr);
}
?>