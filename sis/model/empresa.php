<?php
  class Empresa{
	  private $nome;
	  private $endereço;
	  private $cnpj;
	  
	  public function __construct($a,$b,$c){
		  $this->nome = $a;
		  $this->endereço = $b;
		  $this->cnpj = $c;
	  }
	  
	  	  
	  public function setNome($n){
		$this->nome = $n;  
	  }
	  
	  public function setEndereço($n){
		$this->endereço = $n;  
	  }
	  
	  public function setCnpj($n){
		$this->cnpj = $n;  
	  }
	  
      public function getNome(){
		return $this->nome;  
	  }	  
	  
	  public function getEndereço(){
		return $this->endereço;  
	  }
	  
	  public function getCnpj(){
		return $this->cnpj;		
	  }
	  
	    
	  public function __toString(){
		return "<b>EMPRESA: </b>".$this->nome
		 ." <b>ENDEREÇO: </b>".$this->endereço
		 ." <b>CNPJ: </b>".$this->cnpj;
	  }
	  
	  
  }

  $obj = new Empresa("VoliBeer","Rua Ursai, Nº213","61.586.558/0013-34");
  echo $obj;
?>