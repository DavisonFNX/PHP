<?php
    $nome = "Davison";

    function teste(){
        //fora do escopo
        echo $nome;
        echo "<br>";
    }

    function teste2(){
        //Global
        global $nome;
        echo $nome;
    }

    teste();
    teste2();
?>