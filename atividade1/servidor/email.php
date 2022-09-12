<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$to = "thegui4000@gmail.com";
$assunto = $assunto . "- Site";
$mensagem = "Email Recebido de: $nome\n Resposta ao e-mail: $email\n Mensagem: $mensagem";

$header = "Reply-to: $email\n x-mailer: PHP/". phpversion();

if(mail($to, $assunto, $mensagem, $header)){
    echo('Mensagem enviada');
}else{
    echo('email não enviado');
}
