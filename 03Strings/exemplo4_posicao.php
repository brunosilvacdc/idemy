<?php


$frase = "A repetição é mãe da reteção.";

$palavra = "mãe";


$q = strpos($frase, $palavra);

$texto = substr($frase, 0, $q);

$texto2 =substr($frase, $q + strlen($palavra), strlen($frase));



var_dump($q, $palavra);
echo '<hr>';
var_dump($texto);
echo '<hr>';
var_dump($texto2);