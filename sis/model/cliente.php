<?php
  class Cliente{
	  private $nome;
	  private $cpf;
	  private $nascimento;
	  
	  public function __construct($a,$b,$c){
		  $this->nome = $a;
		  $this->cpf = $b;
		  $this->nasc = $c;
	  }
	  
	  	  
	  public function setNome($n){
		$this->nome = $n;  
	  }
	  
	  public function setCPF($n){
		$this->cpf = $n;  
	  }
	  
	  public function setNascimento($n){
		$this->nasc = $n;   
	  }
	  
      public function getNome(){
		return $this->nome;  
	  }	  
	  
	  public function getCPF(){
		return $this->cpf;  
	  }
	  
	  public function getNascimento(){
		return $this->nasc;		
	  }
	  
	    
	  public function __toString(){
		return "<b>CLIENTE: </b>".$this->nome
		 ." <b>CPF: </b>".$this->cpf
		 ." <b>DATA DE NASCIMENTO:</b> ".$this->nasc;
	  }
	  
	  
  }

  $obj = new Cliente("Gabriel","189.987.234-09","19/07/2002");
  echo $obj;
?>