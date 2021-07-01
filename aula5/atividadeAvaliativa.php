<form method="post" action="#">
<label>Quantos jogadores desejas inserir em seu time</label>
<input type="number" name="qtd" min = "1" max="15">
<button type="submit">Inserir</button>
<br>
</form>
<?php
if($_POST){
    $limite = $_POST['qtd'];
    for($i = 0;$i<$limite;$i++){
        echo
        "<input name='$i' type='text' placeholder='qual o nome do jogador?'>
        <input name='$i' type='text' placeholder='qual o nome de usuario?'>
        Data de nascmimento:<input name='$i' type='date'>
        <select>
        <option value = 'M'>Masculino</option>
        <option value = 'F'>Feminino</option>
        </select>
        <br>";  
    }
}
?> 