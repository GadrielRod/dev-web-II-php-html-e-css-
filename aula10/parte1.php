<?php 
  class FP{
	  private $salario;
	  private $cargaHorariaDiaria;
	  
	  public function setSalario($s){
		  $this->salario = $s;
	  }
	  
	  public function setCHDiaria($ch){
		  $this->cargaHorariaDiaria = $ch;
	  }
	  
	  public function getSalario(){
		  return $this->salario;
	  }
	  
	  public function getCHDiaria(){
		  return $this->cargaHorariaDiaria;
	  }
	  
	  public function getCHMensal(){
		  if($this->cargaHorariaDiaria==4){
			  return 100;
		  }elseif($this->cargaHorariaDiaria==6){
			  return 150;
		  }elseif($this->cargaHorariaDiaria==8){
			  return 220;
		  }else{
			  return 0;
		  }
	  }
	  
	  public function getCHMensalG(){
		  if($this->cargaHorariaDiaria<8){
		    return $this->cargaHorariaDiaria*25;
		  }else{
			return $this->cargaHorariaDiaria*25+20;   
		  } 
	  }
	  
	  public function getAliquotaINSS(){
		  if($this->salario<=1045){
			  return 0.075;
		  }elseif($this->salario<=2089.6){
			return 0.09;  
		  }elseif($this->salario<=3134.4){
			return 0.12;  
		  }else{
			  return 0.14;
		  }
      }
      
      public function getIRRF(){
        if($this->salario<=1903.98){
            return 0.0;
        }elseif($this->salario<=2826.65){
          return 0.075;  
        }elseif($this->salario<=3751.05){
          return 0.15;  
        }else{
            return 0.225;
        }
    }

    public function getDeducao(){
        if($this->salario<=1903.98){
            return 0.0;
        }elseif($this->salario<=2826.65){
          return 142.80;  
        }elseif($this->salario<=3751.05){
          return 354.80;  
        }else{
            return 636.13;
        }
    }
	  
	  
  }
?>