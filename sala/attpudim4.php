<?php
    $quantidade = $_GET["quantidade"];
    $preco = 0.20;
    if($quantidade > 12){
        $preco = 0.15;
    }
    $resultado = $quantidade * $preco;
    echo "<h1>O valor da compra foi de $resultado</h1>";