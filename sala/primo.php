<?php
    $num = $_GET["numero"];
    $multi = 1;
    $numx = 1;
    for($x = 1; $x <= $num; $x++){
        $multi = $x * $multi;
        $numx = $x;
    }
?>