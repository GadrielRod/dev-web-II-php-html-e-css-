<?php 
  class FP {
	  private $salario;
	  private $cargaHorariaDiaria;
	  
	  public function setSalario($s){
		  $this->salario = $s;
	  }
	  
	  public function getSalario(){
		  return $this->salario;
	  }
	  
	 
	  
	  public function getSalarioMensal(){
		  if($this->salario <= 1.045){
			  return $this->salario = $this->salario  * 0.075;
		  }elseif($this->salario >1.045 and $this->salario<=2.089){
			  return $this->salario * 0.09;
		  }elseif($this->cargaHorariaDiaria==8){
			  return 220;
		  }else{
			  return 0;
		  }
	  }
	  
  }
?>