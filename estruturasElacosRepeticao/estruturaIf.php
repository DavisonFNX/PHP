<?php
    $qualASuaIdade = 10;
    $idadeCrianca = 12;
    $idadeMaior = 18;
    $idadeMelhor = 65;

    if ($qualASuaIdade < $idadeCrianca){
        echo "Crianca";
    }else if ($qualASuaIdade < $idadeMaior){
        echo "Adolecente";
    }else if($qualASuaIdade < $idadeMelhor){
        echo "Adulto";
    }else{
        echo "idoso";
    }
    echo "<br>";
    //operador ternario
    echo ($qualASuaIdade < $idadeMaior)?"Menor idade":"Maior idade";

    
?>