<?php 

//Exercicio 1
/*
    $var1 = 9;
    $var2 = 15;

    if($var1 > $var2){
        echo "O número maior é $var2";
    } else {
        echo "Na verdade ele é o número menor";
    }*/

//Exercicio 2 e 3 
/*
    echo mt_rand(1, 5);
    $numAleatorio = 4;

    if($numAleatorio == 3 || $numAleatorio == 5){
        echo $numAleatorio;
    } else {
        echo "O número não é 3";
    }*/

//Exercicio 4
/*
    echo mt_rand(1, 100);
    $varEx4= 69;

    if($varEx4 > 50){
        echo "O número é maior que 50";
    } else {
        echo "O número é menor que 50";
    }*/

//Exercicio 5 
/*
    echo mt_rand(0, 100);
    $varEx5= 38;

    if($varEx5 > 50 && $varEx5 % 2 == 0){
        echo "O número cumpre a condição";
    } else {
        echo "O número não cumpre a condição";
    }*/

//Exercicio 6
/*
    $idade= 37;
    $casado= false;
    $sexo= "Outro";
    
    if($idade > 18 && $casado == false || $sexo == "outro"){
        echo "Boas Vindas";
    } else {
        echo "Adios";
    }*/

//EXERCICIO 7
/*
    $quantidadeDeAlunos= -1;

    if($i == 1){
        echo "true";
    } else {
        echo "false";
    }*/

//EXERCICIO 8
/*
    $numero= 5;
    //qdo coloco o ? não le mais, pq não considera mais php
    echo $numero % 2 == 0 ?"Esse número é par"."Esse número é impar";*/

//EXERCICIO 9 
/*
    echo mt_rand(1, 5);
    $i= 3;
    switch($i){
        case 3:
        echo "O numero é $i";
        break;
    }*/

//EXERCICIO 10 
/*
    $i= 3;
    switch($i){
        case 1:
        echo "O numero é $i";
        break;
        case 2:
        echo "O numero é $i";
        break;
        default:
        echo "NÃO é igual a 1 ou 2";
    }*/

//EXERCICIO 11 

    //echo mt_rand(1, 100);
    $x= 90;
    $y= 59;
    if($x > $y){
        echo "$x é maior";
    } elseif ($y > $x){
        echo "$y é maior";
    } elseif ($x == $y){
        echo "$x é igual a $y";
    }


?>
    