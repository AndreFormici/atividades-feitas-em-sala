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
    <title>Atividade do Pudim</title>
</head>
<body>
    <style>
        *{
            font-family: arial;
        }
        form{
            width: 550px;
            margin: auto;
            border: 2px solid #000;
            padding: 1em;
        }
        form div{
            margin-top: 1em;
        }
        label{
            display: inline-block;
            width: 100px;
            text-align: right;
        }
        input{
            width: 400px;
            border: 1px solid #000;
            background-color: lightgreen;
            height: 30px;
            border-radius: 5px;
        }
        h1{
            color: lightgreen;
            text-align: center;
        }
        #button{
            background-color: lightgreen;
            border: 1px solid #000;
            margin-left: 100px;
            padding: 10px 180px;
        }
        </style>
    </head>
    <body>
    <form action="newsletterLayout.php" method="post">
        <div>
            <label for="form-name">Nos diga seu nome: </label>
            <input type="text" name="nome" id="form-nome">
        </div>
        <div>
            <label for="form-email">Diga-nos seu e-mail: </label>
            <input type="text" name="email" id="form-email">
        </div>
        <div>
            <input type="submit" value="Enviar">
            <?php $quantidade ++ ?>
        </div>
    </form>

    <form action="enviar.php" method="post">
        <h1>Formulário</h1>
        <div>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" placeholder="Digite aqui seu nome" id="nome">
        </div>    
        <div>
            <label for="email">Email: </label>
            <input type="text" name="email" placeholder="Digite aqui seu email" id="email">
        </div>
        <div>
            <input type="submit" value="Enviar" id="button">
        </div>
    </form>
        
    </body>
</body>
</html>