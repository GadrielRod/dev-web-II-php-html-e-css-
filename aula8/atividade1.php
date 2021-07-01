<?php
class Produto{
   private $nome;
   private $valor;
   private $marca;   
   public function setNome($nome){
      $this->nome = $nome;
   } 
   public function setValor($valor){
      $this->valor = $valor;
   } 
   public function setMarca($marca){
    $this->marca = $marca;
   } 
   public function getNome(){
      return $this->nome;
   } 
   public function getValor(){
      return $this->valor;
   } 
   public function getMarca(){
    return $this->marca;
   }
}
  $p = new Produto;
  $p -> setNome(" Maria ");
  $p -> setValor(" 5.00 R$ ");
  $p -> setMarca(" Biscoito ");

  echo $p -> getMarca(). " " .$p -> getNome(). " " .$p -> getValor();
?>