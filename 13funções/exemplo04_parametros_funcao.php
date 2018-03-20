<?php

function ola($texto = "Mundo",$preriodo = "Bom Dia"){

	echo "Olá $texto! $preriodo <br>";

}

echo ola();
echo ola("" ,"Boa Noite");
echo ola("Bruno","Boa Tarde");
echo ola("Juliana","");