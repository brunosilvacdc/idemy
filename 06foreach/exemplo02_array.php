	<form>
		<input type="text" name="nome">
		<input type="date" name="nascimento">
		<input type="submit" value="ok">
	</form>


	<?php

	if(isset($_GET)){
	foreach ($_GET as $key ) {
		echo "nome do campo: " . $key . "<br>";
		echo "<hr>";
		}
	
	if ($_GET){
		echo "<button>clique aqui</button>";
	}
}