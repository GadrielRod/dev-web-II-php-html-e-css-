<form action="#" method="post">
      <label> Qual sua idade</label><input type="number" name="idade"><br>
	
	 <br> 
	 <button type="submit">Revelar</button>
</form>
<?php
  if($_POST){
    $idade = $_POST['idade'];
    if($idade >= 18 ){
    echo " Você já é capaz de dirigir ";
    }elseif($idade >= 16 and  $idade <= 17 ){
        echo " você é relativamente capaz de dirigir ";
    }else{
        echo " você é incapaz de dirigir ";
    }
}
		
?>