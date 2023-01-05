<?php 
// VARIAVEIS 

$nome = 'Yuri';
$sobrenome = 'Silveira';
$nomeCompleto = $nome.' '.$sobrenome;

echo $nomeCompleto;

// ARRAYS 

$ingredientes = ['açucar', 'farinha de trigo', 'ovo', 'leite', 'fermento em pó'];
echo "</br>".$ingredientes[4];

// Juntando arrays 
$ingredientes2 = [
    ...$ingredientes,
    'corante'
];