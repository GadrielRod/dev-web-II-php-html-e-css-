<?php
//$n = array ("Arroz","feijão","batata","e o que falta?");
$n[0] = "bala"; 
$n[1] = "casa";
$n[2] = "bike";
$n[3] = "nada";

$x = 0;
while($x < 5){
$x = $x + 1;
echo "$x<br>";
}
for($i = 0;$i < 5;$i++){
    echo "$i repetição!<br>";
}
$z = 0;
 echo "<br>Valores do for<br>";

 for($z = 0;$z < count($n);$z++){
     echo $n[$z]."<br>";
 }
?>