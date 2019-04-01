<?php 
    //Atribuicao
    $nome = "Davison";
    //concatenacao
    echo $nome . " Nascimento <br>";
    //composto
    $nome .= " Francisco";

    echo $nome;

    //atribuicao
    $valorTotal = 0;
    $valorTotal += 100;
    $valorTotal += 25;

    echo "<br>";
    echo $valorTotal;

    $valorTotal *= .1;

    echo "<br>";
    echo $valorTotal;

    //aritmeticos
    $a = 10;
    $b = 2;
    echo "<br>";
    echo $a +$b;
    echo "<br>";
    echo $a - $b;
    echo "<br>";
    echo $a * $b;
    echo "<br>";
    echo $a / $b;
    echo "<br>";
    echo $a % $b;
    echo "<br>";
    echo $a ** $b;

    //comparacao

    $a = 30;
    $b = 55;
    $c =55.0;
    echo "<br>";
    var_dump($a > $b);
    echo "<br>";
    var_dump($a < $b);
    echo "<br>";
    var_dump($a == $b);
    echo "<br>";
    var_dump($b == $c);
    echo "<br>";
    var_dump($b === $c);
    echo "<br>";
    var_dump($b != $c);
    echo "<br>";
    var_dump($b !== $c);
    echo "<br>";

    //Spaceship
    var_dump($a <=> $b); //resposta pode ser 1, 0 -1

    echo "<br>";
    
    $a = NULL;
    $b = NULL;
    $c = 10;

    echo $a ?? $b ?? $c;

    $a = NULL;
    $b = 6;
    $c = 10;

    echo "<br>";

    echo $a ?? $b ?? $c;
    echo "<br>";

    //incrementais e decrementais

    $a = 10;

    echo $a++;
    echo "<br>";
    echo $a;
    echo "<br>";
    echo ++$a;
    echo "<br>";
    echo --$a;
    echo "<br>";

    //ordem de precedencia
    $resultado = 10 + 3 / 2;
    echo $resultado;
    echo "<br>";
    $resultado = (10 + 3) / 2;
    echo $resultado;
    echo "<br>";

    //Logicos
    $resultado = (10 + 3) * 2 > 5 && 10 + 5 < 20;

    var_dump($resultado);



?>