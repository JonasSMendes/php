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


</body>
</html>