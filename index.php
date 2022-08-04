<?php

$categorias =[];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$nome = 'Eduardo';
$idade = 8;

//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade <=12)
{
	for($I=0; $I <= count($categorias); $I++){
		if($categorias[$I] =='infantil'){
			echo "O(a) nadador(a)" .$nome. " compete na categoria infantil";
		}
	}
}
else if ($idade >= 13 && $idade <=18)
{
	for($I=0; $I <= count($categorias); $I++){
		if($categorias[$I] =='adolescente'){
			echo "O(a) nadador(a)" .$nome. " compete na categoria adolescente";
		}
	}
}
else
{
for($I=0; $I <= count($categorias); $I++){
		if($categorias[$I] =='adulto'){
			echo "O(a) nadador(a)" .$nome. " compete na categoria adulto";
		}
	}	
}





