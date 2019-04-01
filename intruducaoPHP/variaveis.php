<?php
    $nome = "Davison";
    echo $nome;
    echo "<br>";

    // Concatenacao
    $sobrenome = "Nascimento";
    $nomeCompleto = $nome . " " . $sobrenome;
    echo $nomeCompleto;
    echo "<br>";

    //Tirar a variavel da memoria
    unset($nome);
    echo $nome;

    //verificando a existencia de uma variavel
    if (isset($nomeCompleto)){
        echo $nomeCompleto;
    }
?>