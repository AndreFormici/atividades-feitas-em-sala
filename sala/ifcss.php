<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hora atual</title>
</head>
<style>
    .dia{
        color: salmon;
        text-aling: left;
    }
    .tarde{
        color: violet;
        text-align: center;
    }
    .noite{
        color: blue;
        text-align: right;
    }
</style>
<body>
    <?php
        //$hora = data("H");

        $hora = $_GET["horaAtual"];
    
        if($hora < 12){
            echo "<h1 class='dia'>Bom dia</h1>";
        }
        elseif($hora < 18){
            echo "<h1 class='tarde'>Boa tarde</h1>";
        }
        else{
            echo "<h1 class='noite'>Boa noite</h1>";
        }

    ?>
    
</body>
</html>