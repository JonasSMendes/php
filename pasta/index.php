<?php

$nome = 'jonas';
$sobrenome = 'mendes';

$nome_completo = "$nome $sobrenome";

$numero_letras = mb_strlen($nome_completo)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    
<h3> meu nome é:</h3> 

<h1>
    <?php   
         echo $nome.' '.$sobrenome;
    ?>  
</h1>
<br>


<p> 
   meu nome é <?php echo "$nome $sobrenome";?>
</p> 
<p>
  e o meu nome tem <?php echo $numero_letras?> letras
</p>

<br>

<p>
    <?php echo "meu nome é".' '. strtoupper($nome); echo " meu sobrenome é".' '.strtoupper($sobrenome); ?>
</p>
<br>
<?php
// arrays e seus modos de usar no php
$dados = [
    100,
    200,
];

echo $dados[1];

$dados[] = 300;

echo '<br>';

echo $dados[2];
echo '<br>';

$cadastro = [
    'nome' => 'jonas',
    'idade'=> '25',
    'email' => 'jonas@gmail.com',
    'telefone' => '99999999'
];

echo $cadastro['telefone'];

echo '<br>';

$multi = [
    'brasil' => ['basilia', 'rio de janeiro', 'são paulo'],
    'portugal' => ['lisboa', 'coimbra', 'porto']
];

echo $multi['portugal'][1];
echo '<br>';
$cake = 'torta';


if('bolo' === $cake){
    echo 'que delicia seu bolo';
} else if('torta' === $cake){
    echo 'hmmm não sei oque é isso';
}
echo '<br>';

$opcao = 0; // false

$name = $opcao == 1 ? 'jonas' : 'pedro';

echo $name;

echo '<br>';echo '<br>';


$color = 1;

?>

<h2 style="color: <?= $color == 0 ? 'red' : 'blue'?>"> esse texto foi mudado com php</h2>

</body>
</html>