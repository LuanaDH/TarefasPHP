<!--
<!DOCTYPE HTML>
<html>
    <body>
        <form action="imprimir.php" method="get">
            Nome: <input type="text" name="nome" id="Luana"><br>
            E-mail: <input type="text" name="email" id=" "><br>
            <input type="submit">
        </form>
    </body>
</html> 
-->

<?php 
 
//EX 1 e 2   
//Resposta a) aparece na tela um pequeno form 

//B
/*echo "Resposta 2b!";
var_dump($_GET);
echo $_GET['nome'];*/

//C
/*foreach ($_GET as $key => $value){
    echo "$key : $value";
}*/

?>

<!-- EXERCICIO 3
<!DOCTYPE HTML>
<html>
    <body>
        <form action="imprimir.php" method="POST">
            Nome: <input type="text" name="nome" id="Luana"><br>
            E-mail: <input type="text" name="email" id=" "><br>
            <input type="submit">
        </form>
    </body>
</html>
-->
<!--EXERCICIO 4 -->
<!DOCTYPE HTML>
<html>
    <body>
        <form action="imprimir.php" method="POST">
            Nome: <input type="text" name="nome" id="Luana"><br>
            E-mail: <input type="text" name="email" id=" "><br>
            <h3>Como você ficou sabendo deste site?</h3>
            Email <input type="checkbox" name="opcao1" value="email"><br>
            Rede Social <input type="checkbox" name="opcao2" value="midiaSocial"><br>
            Outros <input type="checkbox" name="opcao3" value="outros"><br>
            <h3>Gênero</h3>
            Feminino <input type="radio" name="femin" value="feminino"><br>
            Masculino <input type="radio" name="masc" value="masculino"><br>
            Outros <input type="radio" name="pno" value="outros"><br>
            <h3>Dormiu bem ontem a noite? Dê uma nota:</h3>
            <select name="dormiu" id="">
                <?php 
                for($i=1; $i <= 10; $i++){ ?>
                    <option value="<?php echo $i ?>"><?php echo $i?></option>
                    <?php } ?>
                </select>
                <h3>Termos e Condições</h3>
                Aceitar <input type="checkbox" name="yes" value="sim"><br>
                Não Aceitar <input type="checkbox" name="no" value="nao"><br><br>
            <input type="submit">
        </form>
    </body>
</html>

<?php 
//EXERCICIO 5
//    $header = getallheaders();
//       foreach($header as $key => $value){
//            echo "$key : $value"."<br>";
//        }

//EXERCICIO 6
var_dump($GLOBALS);
 
?>

