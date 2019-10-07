<?php 
//EXERCICIO 1
/*
for($i=0; $i<=100;$i++){
    echo $i." ";
}*/

//EXERCICIO 2 
/*
echo mt_rand(1, 100);
$varEx2= 11;
echo "O número aleatório gerado foi $varEx2 <br>";
for($i=0; $i<=$varEx2; $i++){
    echo $i." ";
}*/

//EXERCICIO 3  
/*
echo "Tabuada do 2 <br>";
for($i=0; $i<=10; $i++){
    $multiplicar= $i*2;
    echo $multiplicar." ";
}*/

//EXERCICIO 4 
/*
$cara = 0;
$numJogadas= 0;

while ($cara <= 5){
    $moeda = mt_rand (0 ,1);
    if ($moeda == 1){
        $cara++;
    }
    $numJogadas++;
}
echo "Foram lançadas $numJogadas vezes a moeda para sair 5 vezes cara";*/

//EXERCICIO 5 
/*
    $numJogadas= 0;

do {
    $moeda= mt_rand (0, 1);
    $numJogadas++;
}
while ($moeda == 1);
echo "Foram lançadas $numJogadas vezes a moeda"*/

//EXERCICIO 6

//$arrayEx6 = ["Luana", "Daniel", "Laura", "Cookie", "Natasha"];
//FOR
/*
    for($i = 0; $i<count($arrayEx6); $i++){
    
    echo $arrayEx6[$i]."<br>";
    }*/

//FOREACH
/*
    foreach($arrayEx6 as $nomes){
        echo $nomes."<br>";
    }*/

//WHILE
/*
    $i = 0;
    while($i < count($arrayEx6)){
        echo $arrayEx6[$i]."<br>",
        $i++;
    }*/

//DO WHILE
/*
    $i = 0;
    do{
        echo $arrayEx6[$i]."<br>";
        $i++;
    } while ($i < count($arrayEx6));*/

//EXERCICIO 7

$numeroAleatorio= [];
 
?>