<?php

function soma(float ...$valores):float{

return array_sum($valores);

}
echo '<pre>';
echo var_dump(soma(2,2));
echo soma(2,2);
echo '<br>';
echo soma(25,33);
echo '<br>';
echo soma(1.8,3.8);
echo '<br>';