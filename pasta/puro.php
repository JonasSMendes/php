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


$v = 'eu te amo';

do{
    echo $v++ . '<br>';

}while($v <= 100);

//<h2 style="color: <?= $color == 0 ? 'red' : 'blue' *>  <"> esse texto foi mudado com php</h2>;

// sizeof  => permite que você conte quantos valores seu array tem pode se usar count que o resultado é igual.

//class
class Humano{
    public $nome = 'jonas';
    public $sobrenome = 'mendes';

    public function nomecompleto(){
        return $this->nome.' '.$this->sobrenome;  
    }
};

$humano = new Humano();

echo $humano->nomecompleto();


class humano1{
    private $nome = 'jonas';
    private $sobrenome = 'mendes';
    private $idade = 22;

    function __construct($a , $b, $c)
    {
        $this->nome = $a;
        $this->sobrenome = $b;
        $this->idade = $c;
    }

    public function suasInfos(){
        return "oi eu sou $this->nome $this->sobrenome e tenho $this->idade de idade";
    }

}

$pessoa = new humano1('vitor', 'marques', 35);

echo $pessoa->suasInfos();



