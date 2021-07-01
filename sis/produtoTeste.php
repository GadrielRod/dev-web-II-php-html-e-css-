<?php
  class Produto{
	  private $nome;
	  private $marca;
	  private $valor;
	  
	  public function __construct($a,$b,$c){
		  $this->nome = $a;
		  $this->marca = $b;
		  $this->valor = $c;
	  }
	  
	  	  
	  public function setNome($n){
		$this->nome = $n;  
	  }
	  
	  public function setMarca($n){
		$this->marca = $n;  
	  }
	  
	  public function setValor($n){
		$this->valor = $n;  
	  }
	  
      public function getNome(){
		return $this->nome;  
	  }	  
	  
	  public function getMarca(){
		return $this->marca;  
	  }
	  
	  public function getValor(){
		return $this->valor;		
	  }
	  
	    
	  public function __toString(){
		return "<b>Produto:</b>".$this->nome
		 ." da <b>marca:</b>".$this->marca
		 ." <b>custa</b> R$ ".$this->valor;
	  }
	  
	  
  }

  $obj = new Produto("1","2","3");
  echo $obj;
?>