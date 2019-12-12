<?php
    $num1 = $_GET["primeiro"];
    $num2 = $_GET["segundo"];
    if($num1 > $num2){
        echo "<h1>$num1 é o maior número entre os dois</h1>";
    }
    elseif($num2 > $num1){
        echo "<h1>$num2 é o maior número entre os dois</h1>";
    }