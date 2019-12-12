<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade do Pudim</title>
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
</body>
</html>