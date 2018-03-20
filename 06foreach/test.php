<!DOCTYPE html>
 <meta charset="UTF-8">
 <head>
 <title>Fazendo Bolo</title>
</head>

 <body bgcolor="#23ec4h">
 	
<i><h1 style="color:red;"> Hora de Fazer um Bolo</h1></i>

	<table border="1"  style="width:20%">
  		<tr>
  		  <td> Primeira Etapa </td>
  		  	<td>ir a cozinha</td> 
     	 </tr>
 	 </table>
	<table border="1" style="width:20%">
 		<tr>
  		  <td>Segunda Etapa </td>
   		  <td>farinha</td> 
      	</tr>
  	</table>
  	<table border="1" style="width:20%">
 		<tr>
  		  <td>Terceira Etapa </td>
   		  <td>ovos</td> 
      	</tr>
  	</table>
  	<table border="1" style="width:20%">
 		<tr>
  		  <td>Quarta Etapa </td>
   		  <td>leite</td> 
      	</tr>
  	</table>
  	<table border="1" style="width:20%">
 		<tr>
  		  <td>Qunta Etapa </td>
   		  <td>misturar</td> 
      	</tr>
  	</table>
  	<table border="1" style="width:20%">
 		<tr>
  		  <td>Sexta etapa </td>
   		  <td>levar ao forno</td> 
      	</tr>
  	</table>
  	<table border="1" style="width:20%">
 		<tr>
  		  <td>Setima Etapa </td>
   		  <td>bolo pronto</td> 
      	</tr>
  	</table>


<form method="post">
<?php
//Fazer Bolo
if($_POST) {
	if(array_key_exists('bolo', $_POST)){ 
	
		$primeiraEtapa = $_POST['bolo'];
		
			if($primeiraEtapa == 'ir a cozinha'){
				echo '<p> Segunda Etapa: <input type="text" name="bolo1"';
		}	else {
				echo 'Nao fui na cozinha';
		}
	}
	
	if(array_key_exists('bolo1', $_POST)){ 
		  
	
		$segundaEtapa = $_POST['bolo1'];
		
			if($segundaEtapa == 'farinha'){
				echo '<p> Terceira Etapa: <input type="text" name="bolo2"';
		}	else {
				echo 'sem farinha';
		}
	}
	if(array_key_exists('bolo2', $_POST)){ 
	
		$terceiraEtapa = $_POST['bolo2'];
		
			if($terceiraEtapa == 'ovos'){
				echo '<p> Quarta Etapa: <input type="text" name="bolo3"';
		}	else {
				echo 'sem ovos';
		}
	}
		if(array_key_exists('bolo3', $_POST)){ 
	
		$quartaEtapa = $_POST['bolo3'];
		
			if($quartaEtapa == 'leite'){
				echo '<p> Quinta Etapa: <input type="text" name="bolo4"';
		}	else {
				echo 'sem leite';
		}
	}
		if(array_key_exists('bolo4', $_POST)){ 
	
		$quintaEtapa = $_POST['bolo4'];
		
			if($quintaEtapa == 'misturar'){
				echo '<p> Sexta Etapa: <input type="text" name="bolo5"';
		}	else {
				echo 'nao misturou';
		}
	}
		if(array_key_exists('bolo5', $_POST)){ 
	
		$SextaEtapa = $_POST['bolo5'];
		
			if($SextaEtapa == 'levar ao forno'){
				echo '<p> Setima Etapa: <input type="text" name="bolo6"';
		}	else {
				echo 'coloque no Forno';
		}
	}
		if(array_key_exists('bolo6', $_POST)){ 
	
		$SetimaEtapa = $_POST['bolo6'];
		
			if($SetimaEtapa == 'bolo pronto'){
				echo "<img src=\"bolo.jpg\">";
		}	else {
				echo 'Retorne ao Forno';
		}
	}
} else {
	echo '<p> Primeira Etapa: <input type="text" name="bolo" /></p>';
}
?>	

</body>
	<p><input type="submit" value="enviar" /></p>
</form>


<!--<?php
#$num1 = 10;
#$num2 = 2;

$num3 = $num1 + $num2;
#echo "O numero é" . $num3;