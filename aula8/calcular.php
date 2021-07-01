<?php
class Mat{   
   public function multiplicar($x, $y){
      return $x * $y;
   } 
   public function adicionar($x, $y){
    return $x + $y;
   } 
   public function subtrair($x, $y){
    return $x - $y;
   } 
   public function dividr($x, $y){
    if($x != 0 and $y != 0){
        return $x / $y;
    }else{
        return 0;
    }
   } 
}
  $p = new Mat;
  echo $p -> multiplicar(2,2);
?>