<?php
    include('conn.php');

    $sql = "SELECT * FROM Email";
    $resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado - BD</title>
    <style>
        table, th, td{
            border: 1px solid green;
            border-collapse: collapse;
        }
        td, th{
            padding: 4px;
        }
        th{
            background-color: green;
            color: #fff;
        }
    </style>
</head>
<body>

    <header><h1>Email Cadastrados</h1></header>
    <nav>
        <ul>
            <?php include('./parts/links.php'); ?>
        </ul>
    </nav>
    <main>
        <table>
            <tr>
                <th>Nome</th>
                <th>Email</th>
            </tr>
            <?php include('criarlinha.php'); ?>
        </table>
    </main>
    <footer><h2>Quantidade de email atual: <?php echo $resultado->num_rows ; ?>.</h2></footer>
    
</body>
</html>

<?php $conn->close(); ?>