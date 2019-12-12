<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enviar email</title>
</head>
<body>

    <div>
        <header>
            <h1>Formulário para envio de emails</h1><hr>
        </header>
        <main>
            <form action="enviar.php" method="post">
                <div>
                    <label for="email">Email: </label>
                    <input type='text' id='corpo' name='assunto'>
                </div>
                <div>
                    <label for="copo">Conteúdo: </label>
                    <textarea name="corpo" id="copo" cols="30" rows="10"></textarea>
                </div>
                <div>
                    <label for="assunto">Assunto: </label>
                    <input type='text' id='assunto' name='assunto'>
                </div>
                <div>
                <input type="submit" value="Enviar">
                </div>
            </form>
        </main>
    </div>
    
</body>
</html>