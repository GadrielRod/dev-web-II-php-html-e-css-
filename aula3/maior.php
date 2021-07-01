<form action="#" method="post">
      <label>n1 </label><input type="number" name="n1"><br>
	 <label>n2 </label><input type="number" name="n2"><br>
	 <label>n3 </label><input type="number" name="n3"><br>
	
	 <br> 
	 <button type="submit">CALCULAR</button>
</form>
<?php
  if($_POST){
	    $Um = $_POST['n1'];
	    $Dois= $_POST['n2'];
        $Tres = $_POST['n3'];
     if($Um > $Dois and $Um > $Tres){	   
       echo "<h1>O valor $Um é o maior </h1> ";
     }elseif($Dois > $Um and $Dois > $Tres){
        echo "<h1>O valor $Dois é o maior </h1>"; 
    }
    elseif($Tres > $Um and $Tres > $Dois){
    echo "<h1>O valor $Tres é o maior </h1>"; 
        } 
  }
		
?>