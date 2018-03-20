<?php


// $a = 10;
// function trocaValor(&$a){
// 	$a += 50;
// 	return $a;
// }
// echo trocaValor($a);
// echo '<br>';
// echo trocaValor($a);
// echo '<br>';
// echo $a;

$pessoa = array(
'nome'=>'joão',
'idade'=>20
);

foreach ($pessoa as &$value) {
	if(gettype($value) === 'integer') $value +=10;
		echo $value .'<br>';
}
print_r($pessoa);