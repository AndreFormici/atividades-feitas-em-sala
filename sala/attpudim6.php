<?php
    $sexo = $_GET["sexo"];
    $altura = $_GET["altura"];
    echo "<h1>Digite os valores usando '.' no lugar de ','</h1>";
    if($sexo = "Masculino"){
        $resultado = (72.7 * $altura) - 58;
        echo "$resultado é seu peso ideal";
    }
    elseif($sexo = "Feminino"){
        $resultado = (62.1 * $altura) - 44.7;
        echo "$resultado é seu peso ideal";
    }