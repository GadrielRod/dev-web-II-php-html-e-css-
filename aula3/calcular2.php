###########
<form action="#" method="post">
      <label>NOME </label><input type="text" name="nome"><br>
	 <label>N1 </label><input type="number" name="nota1"><br>
	 <label>N2 </label><input type="number" name="nota2"><br>
	
	 <br> 
	 <button type="submit">CALCULAR</button>
</form>
<?php
  if($_POST){
	    $n = $_POST['nome'];
	    $x = $_POST['nota1'];
        $y = $_POST['nota2'];
	    $media = ($x + $y)/2;
     if($media>=6){	   
       echo "<h1>O(A) Aluno(a) $n está Aprovado com média $media</h1>";
     }elseif($media == 5){
        echo "<h1>O(A) Aluno(a) $n está em recuperação </h1>"; 
    }
    else{
    echo "<h1>O(A) Aluno(a) $n está Reprovado com média $media</h1>"; 
        } 
  }
		
?>