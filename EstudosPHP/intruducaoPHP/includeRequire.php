<?php
    //o include tenta funcionar mesmo que nao exista o arquivo, ou se tenha algum problema nele, e contem o include path. nao recomendado para producao.
    //include "inc/funcaoQualquer.php";

    //o require requer que o arquivo exista, sem erro, senao ele interrompe a operacao. utilizar sempre
    //require_once tras somente uma vez o arquivo.
    require "inc/funcaoQualquer.php";
    $resultado = somar(10, 20);

    echo $resultado;

?>