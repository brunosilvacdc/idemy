
<?php
$contasAPagar = 6800;

$salarioMeu = 6500;
$salarioPessoa = 10;
if($contasAPagar > $salarioMeu && $salarioPessoa){
	
	echo "FUDEUUUUU <br>";

}else if($contasAPagar < $salarioMeu){

	echo "Graças a Deus <br>";
}


echo ($contasAPagar < $salarioMeu || $salarioPessoa) ? "Sem Divida este Mês" : "Estamos Fudidos";

