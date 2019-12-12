<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Layout</title>
    </head>
    <body>
        <style>
            *{
                font-family: arial;
            }
            main{
                
            }
            form{
                width: 950px;
                margin: auto;
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
                height: 30px;
                border-radius: 5px;
            }
            h1{
                color: Red;
                text-align: center;
            }
        </style>
        <body>
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
            </form>
        </body>
    </body>
</html>