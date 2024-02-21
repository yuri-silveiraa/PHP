<?php

// VARIAVEIS

$nome = 'Yuri';
$sobrenome = 'Silveira';
$nomeCompleto = $nome.' '.$sobrenome;
$nomeCompleto = $nome = 'Yuri' ? 'Leticia' : 'Visitante';
echo $nomeCompleto."\n";

// ARRAYS

$ingredientes = ['açucar', 'farinha de trigo', 'ovo', 'leite', 'fermento em pó'];
echo $ingredientes[4]."\n";

// Juntando arrays
$ingredientes2 = [
    ...$ingredientes,
    'corante',
];

$lista = [
    'nome' => 'Bonieky',
    'idade' => 90,
    'atributos' => [
        'forca' => 60,
        'agilidade' => 80,
        'destreza' => 50,
    ],
    'vida' => 1000,
    'mana' => 928,
];

echo 'NOME: '.$lista['nome']."\n";
echo 'FORCA: '.$lista['atributos']['forca']."\n";
echo 'VIDA: '.$lista['vida']."\n";

// -----------------------------------------------------------------
$tipo = 'video';

switch($tipo) {
    case 'video':
        echo 'Exibindo video'."\n";
        break;
    case 'foto':
        echo 'Exibindo foto';
        break;
    case 'texto':
        echo 'Exibindo texto';
        break;
}

foreach ($ingredientes as $chave => $valor) {
    printf(($chave + 1).':'.$valor."\n");
    // echo $ingredientes."\n";
}
