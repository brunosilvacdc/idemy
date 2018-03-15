<?php
$qualASuaIdade = 66;


$idadeCrianca = 12;
$idadeMaior = 18;
$melhorIdade = 65;
if ($qualASuaIdade < $idadeCrianca){

	echo "você é uma Criança";

}else if ($qualASuaIdade < $idadeMaior){ 

	echo "Você é Adolecente";
}else if ($qualASuaIdade < $melhorIdade){

	echo "Você é Adulto";
}else{
	echo "Você esta na Melhor Idade";
}

echo '<br>';

echo ($qualASuaIdade < $idadeMaior) ? "Você é Menor de idade" : "Você é Adulto";



?>