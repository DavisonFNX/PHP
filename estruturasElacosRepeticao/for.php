<?php
   
   for ($i = 0;$i < 10;$i++){
       echo $i . " ";
   }

   echo "<br>";
   echo "<br>";

   for ($i = 0;$i < 1000;$i+=5){
        echo $i . " ";
    }

    echo "<br>";
    echo "<br>";

   for ($i = 0;$i < 1000;$i+=5){
        if($i >= 200 && $i <= 800) continue;   
        echo $i . " ";
    }

    echo "<br>";
    echo "<br>";
    
    for ($i = date("Y"); $i > date("Y")-100; $i--){
        echo $i . " ";
    }

    echo "<br>";
    echo "<br>";

    echo "<select>";
    for ($i = date("Y"); $i > date("Y")-100; $i--){
        echo '<option value="'.$i.'">'.$i.'</option>';
    }
    echo "<select>";



?>