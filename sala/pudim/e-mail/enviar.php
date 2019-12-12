<?php 
    //PHPMailer v5.2 - estável
    //github.com/PHPMailer/tree/5.2-stable

    require 'mailer/PHPMailerAutoLoad.php';
    //require para a execução se houver problema para imporar o arquivo

    $mail = $_POST['mail'];
    $assunto = $_POST['assunto'];
    $corpo = $_POST['conteudo'];

    $mail = new PHPMailer(); //instancia do objeto do tipo PHPMailer
    $mail->isSMTP();
    $mail->CharSet = 'UTF-8';
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'ti33senacsc@gmail.com';
    $mail->Password = 'senac123';
    $mail->Port = 587;

    $mail->setFrom('ti33senacsc@gmail.com');
    $mail->addReplyTo('ti33senacsc@gmail.com');
    $mail->addAddress('canperbr@gmail.com');
    $mail->addAddress('chavinho260@gmail.com');
    //$mail->addCC('canperbr@gmail.com'): ;cópia
    //$mail->addAddress('canperbr@gmail.com');cópia oculta

    $mail->isHTML(true);
    $mail->Subject = 'Assunto do email';
    $mail->Body = '<h1>Conteúdo do email</h1>
                <p>Lorem ipsum dolor sit amet consectetur adpisicing elit.</p>';
    $mail->addAttachment('./img/vintage2.jpg', 'vintage2.jpg');

    if(!$mail->send()){
        echo "Não foi possível enviar a mensagem";
    }
    else{
        echo "Mensagem enviada";
    }
?>