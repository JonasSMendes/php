<?php

echo "ola uhuu\n\rteste";


$frase = 'ola eu sou o maior progrmador de php';
echo '<br>';


$dados = [
    10 => 100,
    20 => 200,
];

// if else 

$cake = 'torta';

if('bolo' === $cake){
    echo 'que delicia seu bolo';
} else if('torta' === $cake){
    echo 'hmmm não sei oque é isso';
}


//operação ternario

$opcao = 0;

$name = $opcao == 1 ? 'jonas' : 'pedro';

echo $name;

$color = 1;

//<h2 style="color: <?= $color == 0 ? 'red' : 'blue'?>"> esse texto foi mudado com php</h2>
