<?php
    $num = $_GET["numero"];
    $multi = 1;
    $numx = 1;
    for($x = 1; $x <= $num; $x++){
        $multi = $x * $multi;
        $numx = $x;
        if($numx != 1){
            echo "* $numx ";
        }
        else {
            echo "$numx ";
        }
    }
    echo "= $multi";
?>