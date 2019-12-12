<?php
    $num = $_GET["numero"];
    for($x = 0;$x <= 10;$x++){
        $resultado = $x * $num;
        echo "$x x $num = $resultado<br>";
    }
?>