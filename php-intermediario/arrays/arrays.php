<?php 

$array = array(
	"Nome" => "Alexander",
	"Idade" => "20",
	"Cidade" => "Curitiba",
	"Estado" => "Paraná"
);

// FUNCAO ARRAY KEYS MOSTRA SOMENTE AS CHAVES E NÃO OS VALORES
// $array2 = array_keys($array);

$array2 = array_values($array);
print_r($array2);
 ?>