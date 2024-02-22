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

// funções numericas

$numero = -8.4;

echo'Lista das funções matemáticas apresentadas nesta aula:'."\n";

echo"Número inteiro (abs)\n";
echo abs($numero);

echo"\nNúmero do PI (Função matemática)\n";
echo pi();

echo"\nNúmero arredondado para BAIXO\n";
$numero2 = 2.7;
echo floor($numero2);

echo"\nNúmero arredondado para CIMA\n";
$numero2 = 2.7;
echo ceil($numero2);

echo"\nNúmero arredondado para CIMA OU PARA BAIXO(dependendo do numero após a virgula)\n";
echo round($numero2);

echo"\nNúmero arredondado para CIMA OU PARA BAIXO(conforme quantidade de CASAS DECIMAIS)\n";
$numero3 = 12.8893247;
echo round($numero2, 2); //2 casas decimais

echo"\nFunção que gera um número aleatório toda vez que atualiza a página\n";
$aleatorio = rand(3, 9);
echo $aleatorio;

echo"\nFunção que gera um número aleatório toda vez que atualiza a página\n";
$aleatorio = rand(3, 9);
echo $aleatorio;

echo"\nFunção para saber qual é o MAIOR número da lista(array) \n";
$lista = [1, 4, 9, 8];
echo max($lista);

echo"\nFunção para saber qual é o MENOR número da lista(array) \n";
$lista = [1, 4, 9, 8];
echo min($lista);

//Func de strings
$name = 'yuri pires silveira';

$nomeAlterado = ucwords($name); // deixa toda primeira letra da maiuscula
printf("\n".$nomeAlterado."\n");

echo'Lista das funções String apresentadas nesta aula:'."\n";

echo'Função para remover espaços'."\n";
$nomeSujo = ' Tayse   ';
$nomeLimpo = trim($nomeSujo);
echo $nomeLimpo;
echo"\n";

echo'Função contar a quantidades de caracteres em uma string'."\n";
$nomeSujo = ' Tayse';
$nomeLimpo = strlen($nomeSujo); //Observação: A funçao strlen conta a quantidade de espaços tambem.
echo $nomeLimpo;
echo"\n";

echo'Função que transforma a string TODA EM MINÚSCULA'."\n";
$nomeMaiusculo = 'TAYSE';
echo strtolower($nomeMaiusculo);
echo"\n";

echo'Função que transforma a string TODA EM MAIUSCULA'."\n";
$nomeMaiusculo = 'tayse';
echo strtoupper($nomeMaiusculo);
echo"\n";

echo'Função que SUBSTITUI palavras dentro da frase por exemplo'."\n";
$nomeCompleto = 'Tayse Rosa';
$nomeAlterado = str_replace('Rosa', 'Silva', $nomeCompleto);
echo'Antes: '.$nomeCompleto."\n";
echo'Antes: '.$nomeAlterado;
echo"\n";

echo'Função que PEGA AS 3 PRIMEIRAS CARACTERES da palavra'."\n";
$nomeCompleto = 'Tayse Rosa';
$nomeAlterado = substr($nomeCompleto, 0, 3);
echo $nomeAlterado;
echo"\n";

echo'Função que procura uma string ou palavra dentro de outra string e retorna a posição do que estamos procurando'."\n";
$nomeCompleto = 'Tayse Rosa';
$nomeAlterado = strpos($nomeCompleto, 'a'); //Posição onde aparece a letra a na 1º vez.
echo $nomeAlterado;
echo"\n";

echo'Função que procura uma string ou palavra dentro de outra string e retorna a posição do que estamos procurando(exemplo COM IF)'."\n";
$nomeCompleto = 'Tayse Rosa';
$posicao = strpos($nomeCompleto, 'a'); //Posição onde aparece a letra a na 1º vez.
if($posicao > -1) {
    echo'Achou';
} else {
    echo'Não achou';
}
echo"\n";

echo'Função que transforma a PRIMEIRA LETRA APENAS EM MAIÚSCULA'."\n";
$nomeCompleto = 'tayse rosa';
$nomeAlterado = ucfirst($nomeCompleto);
echo $nomeAlterado;
echo"\n";
echo'Função que transforma a PRIMEIRA LETRA DE CADA PALAVRA EM MAIÚSCULA'."\n";

$nomeCompleto = 'tayse rosa';
$nomeAlterado = ucwords($nomeCompleto);
echo $nomeAlterado;
echo"\n";

echo'Função que transforma cada palavra em 1 item do array'."\n";
$nomeCompleto = 'tayse rosa mais um sobrenome';
$nomeAlterado = explode(' ', $nomeCompleto); //1º o que esta procurando | onde vai procurar
print_r($nomeAlterado);
echo"\n";

// funções de array

echo 'Lista das funções nativas de ARRAY apresentadas nesta aula:'."\n";

$list = [
    'nome 1',
    'nome 2',
    'nome 3',
    'nome 4',
    'nome 5',
];

echo 'Função para contar quantos itens tem no array'."\n";
$arrayList = count($list);
echo 'Total: '.$arrayList;
echo "\n";

echo 'Função que vai gerar um array com a diferença entre os outros 2 arrays'."\n";
$alunos1 = [
    'Tayse',
    'Pedro',
    'Jose',
    'paula',
    'Francisca',
];

$alunos2 = [
    'Theo',
    'Diego',
    'Pipoka',
    'Myke',
    'Francisca',
];

$alunos3 = array_diff($alunos1, $alunos2);
print_r($alunos3);
echo "\n";

echo 'Função para filtrar algo no array';
$numeros = [10, 20, 24, 91, 18];
$filtrados = array_filter($numeros, function ($item) {
    if($item < 30) {
        return true;
    } else {
        return false;
    }
});

print_r($filtrados);
echo "\n";

echo 'Função para mapear um array(e por exemplo multiplicar cada item do array por 2)';
$numeros = [10, 20, 24, 91, 18];
$dobrados = array_map(function ($item) {
    return$item * 2;
}, $numeros);
print_r($dobrados);

echo "\n";

echo 'Função para REMOVER O ULTIMO ITEM DO ARRAY';

$numeros = [10, 20, 24, 91, 18];
array_pop($numeros);
print_r($numeros);

echo "\n";

echo 'Função para REMOVER O PRIMEIRO ITEM DO ARRAY';

$numeros = [10, 20, 24, 91, 18];
array_shift($numeros);
print_r($numeros);

echo "\n";

echo 'Função para retornar um BOOLEAN se encontrar um item no array'."\n";

$numeros = [10, 20, 24, 91, 18];
if (in_array(90, $numeros)) {
    echo'EXISTE';
} else {
    echo'NÃO EXISTE';
}

echo "\n";

echo 'Função para encontrar um item no array E ONDE ESTA este item na chave do array'."\n";

$numeros = [10, 20, 24, 91, 18];
$pos = array_search(91, $numeros);
echo $pos;

echo "\n";

echo 'Função para Ordenar em ordem CRESCENTE'."\n";

$numeros = [10, 20, 24, 91, 18];
sort($numeros);
print_r($numeros);

echo "\n";

echo 'Função para Ordenar em ordem DECRESCENTE'."\n";

$numeros = [10, 20, 24, 91, 18];
rsort($numeros);
print_r($numeros);
echo "\n";

echo 'Função para Ordenar em ordem DECRESCENTE, mantendo o número da chave de cada item'."\n";

$numeros = [10, 20, 24, 91, 18];
asort($numeros);
//arsort($numeros);
print_r($numeros);

echo "\n";

// função para data

echo date('d-m-Y H:i:s')."\n";

$dataDeNascimento = '1999-10-17';

function dayOfWeek($date)
{
    $daysOfWeek = [
        0 => 'Domingo',
        1 => 'Segunda-Feira',
        2 => 'Terça-Feira',
        3 => 'Quarta-Feira',
        4 => 'Quinta-Feira',
        5 => 'Sexta-Feira',
        6 => 'Sabado',
    ];
    $day = date('w', strtotime($date));

    return date('d/m/Y', strtotime($date)).' - '.$daysOfWeek[$day];
}
echo dayOfWeek($dataDeNascimento);
