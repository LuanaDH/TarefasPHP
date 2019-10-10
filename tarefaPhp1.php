<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Estruturado Um</title>
</head>
<body>
    <?php
    /*
    $numInteiro= 37;
    $numDecimal= 3.7;
    $aspasDuplas= "L";
    $aspasSimples= 'L';
    $string= "Luana";
    $arrayUm= [37, "Luana"];
    $arrayDois= [3.7, 'L'];

    echo $numInteiro;
    var_dump ($numInteiro); 
    echo $numDecimal;
    var_dump ($numDecimal);
    echo $aspasDuplas;
    var_dump ($aspasDuplas);
    echo $aspasSimples;
    var_dump ($aspasSimples);
    echo $string;
    var_dump ($string);
    echo $arrayUm [0].$arrayUm [1];
    var_dump ($arrayUm);
    echo $arrayDois [0].$arrayDois[1];
    var_dump ($arrayDois);
    */

    /*
    $zero= "Três";
    $um= "pratos";
    $dois= "de";
    $tres= "trigo";
    $quatro= "para";
    $cinco= "três";
    $seis= "tigres";
    $sete= "tristes";

    echo $zero." ".$um." ".$dois." ".$tres." ".$quatro." ".$cinco." ".$seis." ".$sete;
    echo $zero." ".$sete." ".$seis;
    */

    /*
    $variable01 = true;
    $variable02 = false;
    $variable03 = 0;
    $variable04 = 1;
    $variable05 = 6;
    $variable06 = '';
    $variable07 = "3";
    $variable08 ="true";
    $variable09 ='false';
    $variable10 = null;

    function tipoDado($varN)
{
if ( $varN == true )
{
echo 'o valor ' . $varN . ' é verdadeiro.';
}
else
{
echo 'o valor ' . $varN . ' é falso.';
}
}

tipoDado($variable10);
    */    

   /*$arrayAnimais= ["cachorro", "gato", "tigre", "galinha", "cavalo"];
    var_dump ($arrayAnimais);
    $arrayAnimais[]= ["coelho", "urso"];
    var_dump ($arrayAnimais);
    echo "Eu gosto de animais:".$arrayAnimais[0], $arrayAnimais[1], $arrayAnimais[2], $arrayAnimais[3], $arrayAnimais[4], $arrayAnimais[5][0], $arrayAnimais[5][1];*/

    /*PROBLEMAS EXERCICIO 4*/

    $arrayAssociativo=[
        "Marca"=> "Honda",
        "Modelo"=>"Fit",
        "Cor"=> "preto",
        "Ano"=> 2019,
        "Placa"=>"exh2335"
    ];
/*var_dump ($arrayAssociativo);*/
    $array_unshift($arrayAssociativo, "Luana");
    echo $arrayAssociativo;

    ?>
</body>
</html>