<form method = "post" action = "#">
<label>Alunos?</label>
<input type="number" name="qtd">
<button type = "submit">OK</button>
<br>
</form>

<?php
if($_POST){
$x = $_POST['qtd'];
$i = 1;
while($i<=$x){
    echo "<label>$i ° Aluno:</label><input name='p$i' type='text'>
    <label>N1:</label><input name = 'n1$i' type = 'number'>
    <label>N2:</label><input name = 'n2$i' type = 'number'>
    <br>";
    $i = $i + 1;
    }
}
?>