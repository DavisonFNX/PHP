<?php

    //Tipos basicos
    $nome = "HCode";
    $site = 'www.hcode.com.br';

    $ano = 1990;
    $salario = 5500.99;
    $bloqueado = false;

    //Composto e Tipos especiais
    $frutas = array("abacaxi","laranja", "manga");

    echo $frutas[1];

    $nascimento = new DateTime();
    echo "<br>";
    //var_dump($nascimento);

    $arquivo = fopen("tiposVariaveis.php", "r");
    //var_dump($arquivo);

    $nulo = null;

    //Variaveis pre-definidas e array superglobais
    //$nome = (int)$_GET["a"]; //CAST
    //var_dump($nome);

    $ip = $_SERVER["REMOTE_ADDR"];
    echo $ip;
    

?>