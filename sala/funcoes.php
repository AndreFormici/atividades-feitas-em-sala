<?php
    for($i=0;$i<5;$i++){
        escreverHello();
    }
    function escreverHello(){
        echo "Hello World";
    }
    echo "<hr>";
    function familia($nome){
        echo "$nome Silva.<br>";
    }
    familia("Pedro");
    familia("Maria");
    echo"<hr>";
    function familiaIdade($nome, $idade){
        echo "$nome Silva. Idade $idade";
    }
    familiaIdade("Silas", "35");
    //////////////////////////////////
    echo"<hr>";
    function somar($num1, $num2){
        return $num1 + $num2;
    }
    somar(5,10);
    echo $resultado;
?>