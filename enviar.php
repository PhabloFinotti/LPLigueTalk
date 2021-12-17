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
    $mail->Host       = 'mail.liguetalk.com.br';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'atendimento@liguetalk.com.br';                     //SMTP username
    $mail->Password   = 'ligu3t@lk2021';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('atendimento@liguetalk.com.br', 'Atendimento Landing Page');
    $mail->addAddress('comercial@liguetalk.com.br');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Enviado pela Landing Page';



    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];
    $data_envio = date('d/m/Y');
    $hora_envio = date('H:i:s');

    $mail->Body= "
        <style type='text/css'>
            body {
                margin: 0px;
                font-family: Verdane;
                font-size: 14px;
                color: #333;
            }

            a {
                color: #8354E9;
                text-decoration: underline;
            }

            a:hover {
                color: initial;
                text-decoration: underline;
            }
        </style>

        <html>
            <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#eee'>
                <tr>
                    <td width='500'>Nome: <b>$nome</b></td>
                </tr>
                <tr>
                    <td width='320'>E-mail: <b>$email</b></td>
                </tr>
                <tr>
                    <td width='320'>Telefone: <b>$telefone</b></td>
                </tr>
                <tr>
                    <td width='320'>Mensagem: $mensagem</td>
                </tr>
                <tr>
                    <td>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></td>
                </tr>
            </table>
        </html>
        ";
    

    if( $captchaSuccess ){
        $errors = $mail->send();
    }

    if($errors == true){
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