<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$resposta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcxuYIdAAAAALmlh_whcfp8DSI9A9t0iZxUr1T7&response=".$_POST['response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
$resposta = json_decode($resposta);

if($resposta->success == 1){
    $captchaSuccess = true;
}else{
    exit;
}


try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'phablofinottimartins@gmail.com';                     //SMTP username
    $mail->Password   = 'phabloGmail2';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('phablofinottimartins@gmail.com', 'Mailer');
    $mail->addAddress('phablofinottimartins@gmail.com', 'Phablinho');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Teste';
    $mail->Body    = 'Esse é um teste de email com PHP Mailer<br>' . $_POST['nome'] . ' + '. $_POST['email'] . ' + ' . $_POST['telefone'];

    if( $captchaSuccess ){
        $errors = $mail->send();
    }

    if($errors == 11){
        echo '
            {
                "title": "Sucesso!",
                "text": "Sua mensagem foi enviada com sucesso!",
                "icon": "success",
                "confirmButtonText": "OK"
            }
        ';
    }else{
        echo '
            {
                "title": "Erro!",
                "text": "Houve um erro ao enviar sua mensagem!",
                "icon": "error",
                "confirmButtonText": "OK"
            }
        ';
    }
} catch (Exception $e) {
    echo '
        "title": "Erro!",
        "text": "Houve um erro ao enviar sua mensagem!",
        "icon": "error",
        "confirmButtonText": "OK"
    ';
}