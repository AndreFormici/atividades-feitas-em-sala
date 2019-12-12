<?php
    $senha = $_GET["senha"];
    if($senha == "1234"){
        echo "<h1>ACESSO PERMITIDO</h1>";
    }
    else {
        echo "<h1>ACESSO NEGADO</h1>";
    }