<?php
    //$arquivo = fopen("novoarquivo.txt", "w") or die("Não foi possível encontrar o arquivo");
    $arquivo = fopen("novoarquivo.txt", "a") or die("Não foi possível encontrar o arquivo");
    
    $texto = "Windows lixo!!\n";
    fwrite($arquivo, $texto);
    
    $texto = "Aula de PHP!!\n";
    fwrite($arquivo, $texto);

    fclose($arquivo);
?>