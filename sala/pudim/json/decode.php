<?php
    //$json='{"nome": "hello world"}';
    
    $json=file_get_contents("https://api.myjson.com/bins/18yssu");
    
    $dado=json_decode($json);
    
    //var_dump($dado);

    echo $dado->nome;
    
    echo "<hr>";

    $json=file_get_contents("https://api.myjson.com/bins/16pcpa");

    $dado=json_decode($json);

    foreach($dado as $d){
        echo $d->nome . "<br>";
    }
?>