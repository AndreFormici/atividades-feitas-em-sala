<?php
    $idades = array("Du"=>"18", "Alice"=>"18", "Vitão"=>"52", "MCKevinho"=>"17");
    echo "Idade do Vitão: " . $idade['Vitão'] . "<br>";
    foreach($idades as $nome => $idade){
        echo "Nome: " . $nome . ", idade: " . $idade . "<br>";
    }
    echo "<hr>";
    $valor = "19";
    $num = (int)$valor;