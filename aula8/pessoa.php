<?php
class Pessoa{
   private $nome;
   private $nascimento;   
   public function setNome($nome){
      $this->nome = $nome;
   } 
   public function setNascimento($n){
      $this->nascimento = $n;
   } 
   public function getNome(){
      return $this->nome;
   } 
   public function getNascimento(){
      return $this->nascimento;
   } 
}
  $p1 = new Pessoa;
  $p1->setNome(" MARIA ");
  $p1->setNascimento(" 2000-10-01 ");
  echo $p1-> getNome(); 
  echo $p1-> getNascimento();

  $p2 = new Pessoa;
  $p2 -> setNome("João");
  $p2 -> setNascimento("2002-11-11");
  echo $p2 -> getNome(). " " .$p2 -> getNascimento();
?>