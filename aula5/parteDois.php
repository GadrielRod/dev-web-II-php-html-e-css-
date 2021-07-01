<form method="post" action="#">
<label>canditados</label>
<input type="number" name="qtd">
<button type="submit">ok</button>
<br>
</form>
<?php
if($_POST){
    $limite = $_POST['qtd'];
    for($i = 0;$i<$limite;$i++){
        echo
        "<select>
        <option value = '0'>prefeito</option>
        <option value = '1'>vereador</option>
        </select>
        <input name='candidato$i' type='text' placeholder='qual o nome?'>
        <br>";  
    }
}
?> 