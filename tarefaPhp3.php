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
/*
$numeroAleatorio= [];
    for($i = 0; $i <= 10; $i++){
        $numeroAleatorio [] = mt_rand (0, 10);
    }
    var_dump($numeroAleatorio);*/
//FOR
/*
    for($i = 0; $i < count($numeroAleatorio); $i++){
        if($numeroAleatorio[$i] == 5){
            break;
        }
        echo "Encontramos um numero 5!";
            break;
    }*/

    //WHILE
/*
    $i = 0;
    while($i < count($numeroAleatorio)){
        if($numeroAleatorio[$i] == 5){
            break;
        }
        echo "Encontramos o número 5!";
            break;
    }*/

    //DO WHILE
/*    
    $i = 0;
    do{
        echo "Encontramos o número 5!";
        break;
        $i++;
    } while($i < count($numeroAleatorio));*/
        
//EXERCICIO 8
/*    
    foreach (range('a','n') as $index => $value){
        echo "Na posição $index, está o valor $value <br>";
    }*/

//EXERCICIO 9 
/*
    $mascote = ["animal"=>"cachorro", "idade"=>5, "altura"=>"0,60", "nome"=>"Cookie"];
    foreach($mascote as $respostas => $mascote){
        echo "$respostas: $mascote"."<br>";
    }*/

//EXERCICIO 11
/*
$ceu = ["Itália"=>"Roma", "Luxemburgo"=>"Luxemburgo",
"Bélgica"=> "Bruxelas", "Dinamarca"=>"Copenhagen",
"Finlândia"=>"Helsinki", "França" => "Paris",
"Eslováquia"=>"Bratislava", "Eslovênia"=>"Liubliana",
"Alemanha" => "Berlim", "Grécia" => "Atenas",
"Irlanda"=>"Dublin", "Holanda"=>"Amsterdã",
"Portugal"=>"Lisboa", "Espanha"=>"Madri",
"Suécia"=>"Estocolmo", "Reino Unido"=>"Londres",
"Chipre"=>"Nicósia", "Lituânia"=>"Vilnius", "República
Tcheca"=>"Praga", "Estônia"=>"Tallinn",
"Hungria"=>"Budapeste","Letônia"=>"Riga", "Malta"=>"Valletta",
"Áustria" => "Viena", "Polônia"=>"Varsóvia"];
    foreach($ceu as $capitais => $ceu){
        echo "A capital da $capitais é $ceu.<br>";
    }*/

//EXERCICIO 12
/*
$ceu = [
    "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
    "Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo"],
    "Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"],
    "França" => ["Paris", "Nantes", "Lyon"],
    "Itália" => ["Roma", "Milão", "Veneza"],
    "Alemanha" => ["Munique", "Berlim", "Frankfurt"]
    ];
    foreach($ceu as $pais => $cidades){
        echo "As cidades da $pais são: <br>";
    foreach($cidades as $var => $cidades){
        echo "-".$cidades."<br>";
    }
    }*/

//EXERCICIO 13
$ceu = [
    ["Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],"naAmerica" => True],

    ["Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo"], "naAmerica" => False],
    //"Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"],
    //"França" => ["Paris", "Nantes", "Lyon"],
    //"Itália" => ["Roma", "Milão", "Veneza"],
    //"Alemanha" => ["Munique", "Berlim", "Frankfurt"]
    ];

    foreach($ceu as $pais => $cidades){
        if($pais["naAmerica"] = True){
            foreach($pais as $pais2){
                echo "As cidades da $pais são: <br>";
              foreach($pais[0] as $cidades){
                                
              }
            }
        }
    }

    
?>