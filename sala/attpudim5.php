<?php
    $num1 = $_GET["numero1"];
    $num2 = $_GET["numero2"];
    $num3 = $_GET["numero3"];
    if($num1 > $num2 && $num1 > $num3 && $num2 > $num3){
        echo "<h1>$num1</h1>";
        echo "<h2>$num2</h2>";
        echo "<h3>$num3</h3>";
    }
    elseif($num1 > $num2 && $num1 < $num3){
        echo "<h1>$num3</h1>";
        echo "<h2>$num1</h2>";
        echo "<h3>$num2</h3>";
    }
    elseif($num1 < $num2 && $num1 > $num3){
        echo "<h1>$num2</h1>";
        echo "<h2>$num1</h2>";
        echo "<h3>$num3</h3>";
    }
    elseif($num2 > $num1 && $num2 > $num3 && $num1 < $num3){
        echo "<h1>$num2</h1>";
        echo "<h2>$num3</h2>";
        echo "<h3>$num1</h3>";
    }
    elseif($num3 > $num2 && $num3 > $num1 && $num2 > $num1){
        echo "<h1>$num3</h1>";
        echo "<h2>$num2</h2>";
        echo "<h3>$num1</h3>";
    }
    elseif($num1 > $num2 && $num3 < $num1 && $num2 < $num3){
        echo "<h1>$num1</h1>";
        echo "<h2>$num3</h2>";
        echo "<h3>$num2</h3>";
    }
    elseif($num1 == $num2 && $num1 > $num3){
        echo "<h1>$num3</h1>";
        echo "<h2>$num2 e $num1 são iguais</h2>";
    }
    elseif($num1 < $num2 && $num1 == $num3){
        echo "<h1>$num2</h1>";
        echo "<h2>$num1 e $num3 são iguais</h2>";
    }
    elseif($num1 < $num2 && $num1 == $num3){
        echo "<h1>$num1</h1>";
        echo "<h2>$num2 e $num3 são iguais</h2>";
    }
    elseif($num1 == $num2 && $num1 == $num3){
        echo "<h1>$num2, $num1 e $num3 são iguais</h1>";
    }