<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "attpudim";

    $conn = new mysqli($servidor, $usuario, $senha, $banco);

    if($conn->connect_error){
        die("Não foi possivel conectar: " . $conn->connect_error);
    }
?>