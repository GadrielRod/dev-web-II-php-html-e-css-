<form action = "#" method="post">
        <label>Idade 1</label><input type="number" min="0" max="200" name="v1" required>
        <label>Idade 2</label><input type="number" min="0" max="200" name="v2"
        required>
        <label>Idade 3</label><input type="number" min="0" max="200" name="v3"
        required>
        <label>Idade 4</label><input type="number" min="0" max="200" name="v4"
        required>
        <button type="submit">calcular</button>
        <br>
       

</form>
        <?php
        if($_POST){
    $v1 = $_POST['v1'];
    $v2 = $_POST['v2'];
    $v3 = $_POST['v3'];
    $v4 = $_POST['v4'];
    $resultado = ($_POST['v1'] + $_POST['v2'] + $_POST['v3'] + $_POST['v4'])/4;
    echo " A media da idade dos alunos é <b>$resultado</b>";
                } 
    ?>
    