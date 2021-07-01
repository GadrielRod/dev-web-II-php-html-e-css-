<?php
    $n1 = 8.8;
    $n2 = 7;
    $media = ($n1 + $n2)/2;
    $nome = "João da silva";
    $constante = 7 + 1.5;
    echo "O resultado é ".$constante;
    $resto = 19%5;
    echo " <br> o resto é ". $resto;
    echo "<table border = 1>
            <tr>
            <th>NOME</th> 
            <th>N1</th> 
            <th>N2</th> 
            <th>MEDIA</th>
            </tr>
            <tr>
            <td>$nome</td>
            <td>$n1</td>
            <td>$n2</td>
            <td>$media</td>
            </tr>
            </table>
            "
?>
<table border = 4>
            <tr>
            <th>NOME</th> 
            <th>N1</th> 
            <th>N2</th> 
            <th>MEDIA</th>
            </tr>
            <tr>
            <td><?php echo $nome; ?></td>
            <td><?php echo $n1; ?></td>
            <td><?php echo $n2; ?></td>
            <td><?php echo $media; ?></td>
            </tr>
            </table>
            