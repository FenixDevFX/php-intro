<?php

$categorias =[];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
	echo'O nome precisa ser preenchido';
	return;
}

if(strlen($nome) < 3)
{
	echo 'O nome deve conter mais de 3 caracteres';
	return;
}
if(strlen ($nome) > 40)
{
	echo 'O nome é muito extenso';
	return;
}
if(!is_numeric($idade))
{
	echo 'Informe um número para idade';
	return;
}

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
