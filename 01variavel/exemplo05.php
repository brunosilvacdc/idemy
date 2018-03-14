<?php


$nome = "Glaucio";

function teste () {

	global $nome;
	echo $nome . '<br>';

}


function teste2() {

	$nome = "bruno";

	echo $nome;
}

teste();
teste2();