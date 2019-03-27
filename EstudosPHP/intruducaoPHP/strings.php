<?php  
    $nome = "Hcode";
    $nome2 = "Treinamentos";

    //var_dump($nome, $nome2);

    //interpolacao de variaveis
    echo "ABC $nome";
    echo "<br>";
    echo 'ABC $nome';
    echo "<br>";

    //operacoes com funcoes de string
    $nome = "davison francisco";

    $nome = strtoupper($nome);
    echo "<br>";
    echo $nome;
    echo "<br>";

    $nome = strtolower($nome);
    echo $nome;
    echo "<br>";

    echo ucwords($nome);
    echo "<br>";

    echo ucfirst($nome);
    echo "<br>";

    $empresa = "Hcode";
    $empresa = str_replace("o", "0", $empresa);

    echo $empresa;
    echo "<br>";

    $empresa = str_replace("e", "3", $empresa);

    echo $empresa;
    echo "<br>";

    $frase = "A repeticao e a mae da retencao.";
    $palavra = "mae";
    $q = strpos($frase, $palavra);
    var_dump($q);
    echo "<br>";
    $texto = substr($frase, 0, $q);
    var_dump($texto);
    echo "<br>";
    $texto = substr($frase, $q + strlen($palavra), strlen($frase));
    var_dump($texto);
    echo "<br>";




?>