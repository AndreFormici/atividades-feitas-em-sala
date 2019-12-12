<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>For CSS</title>
</head>
<body>
<main>
    <h1>Contagem de números</h1>
    <hr>
    <ul>
        <?php
            for($i=0;$i<10;$i++){
                echo "<li> Número: $i</li>";
            }
        ?>
    </ul>
</main>
    
</body>
</html>