<?php
    $json=file_get_contents("https://api.myjson.com/bins/18yssu");
    
    $titulo=json_decode($json);

    $json=file_get_contents("https://api.myjson.com/bins/16pcpa");

    $dado=json_decode($json);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titulo->nome ?></title>
</head>
<body>

    <div>
        <header>
            <h1>Título do site <?php echo $titulo->nome ?></h1>
        </header>
        <main>
            <table>
                <tr>
                    <th>id</th>
                    <th>nome</th>
                </tr>
                <?php
                    foreach($dado as $dado){
                        echo "<tr>";
                        echo "<td>" . $dado->id . "</td>";
                        echo "<td>" . $dado->nome . "</td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </main>
    </div>    
</body>
</html>