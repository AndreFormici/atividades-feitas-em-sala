<?php
    $num1 =$_GET["num1"];
    $num2 =$_GET["num2"];
    $soma = 0;
    if($num1 > $num2){
        for($x = $num2 + 1;$x < $num1; $x++){
            echo "$x<br>";
            $soma = $soma + $x;
        }
        $soma = $soma + $num1 + $num2;
        echo "A soma dos valores é de: $soma";
    }
    if($num2 > $num1){
        for($x = $num1 + 1;$x < $num2; $x++){
            echo "$x<br>";
            $soma = $soma + $x;
        }
        $soma = $soma + $num1 + $num2;
        echo "A soma dos valores é de: $soma";
    }
?>