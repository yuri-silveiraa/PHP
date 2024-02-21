<?php

function somar(int $n1, int $n2 = 0, int $n3 = 0)
{
    $total = $n1 + $n2 + $n3;

    return $total;
}
$x = somar(1, 3);
$y = somar(2, 5);
$w = somar($x, $y);

printf($w."\n");

// mandando uma variavel pelo parametro da função
function dados(string $n1, string $n2, &$n3) //& vai ser uma refenrencia a variavel que for passada como parametro
{
    $n3 = 'Meu nome é '.$n1.' tenho '.$n2."\n";
}

$job = '';

dados('Yuri', '23 anos', $job); // passando job como parametro a função vai alterar o valor de job mesmo fora do escopo da função

printf($job);

// func anonima e arrow function

$imposto = function ($value) { //func anonima
    return $value * 0.4;
};

$dizimo = fn ($valor) => $valor * 0.1; // arrow func

printf($imposto(1400)."\n");
printf($dizimo(100)."\n");
