<form method = "post" action = "#">
<label>Digite um numero?</label>
<input type="text" name="qtd">
<button type = "submit">OK</button>
<br>
</form>
<?php
if($_POST){
$x = $_POST['qtd'];
$i = ($x + 85);
while($x <= $i ){
    echo "$x <br>";
    $x = $x + 1;
    }
}
?>