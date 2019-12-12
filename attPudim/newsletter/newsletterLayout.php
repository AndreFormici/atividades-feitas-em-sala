<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>
        Bem vindo(a) a este humilde site :) <?php echo $_POST['nome'];?>
    </h1>
    <h2>
        Seu e-mail foi cadastrado com sucesso, aqui esta ele: <?php echo $_POST['email'];?>
    </h2>
    <?php
        $arquivo = fopen("registro-email.txt", "a") or die("Não foi possível salvar seu e-mail, tente novamente");
        
        $texto = $_POST['email'];
        fwrite($arquivo, $texto);
        fclose($arquivo);   
    ?>
    <?php
        $numero = fopen("registro-email.txt", "r") or die("Não foi possível contar seus cadastros, tente novamente");
        $quantidade = 0;
        while(!feof($numero)){
            fgets($numero);
            $quantidade++;
        }
        echo "Estão cadastrados $quantidade e-mails";
    ?>
</body>
</html>