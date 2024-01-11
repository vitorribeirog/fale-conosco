<?php

$nameUser = addslashes($_POST['name']);
$emailUser = addslashes($_POST['email']);
$phoneUser = addslashes($_POST['phone']);

$to = "seuemail@gmail.com"; // email que recebe as solicitações de contato
$subject = "Coleta de dados - Meu Site";

$body = "Nome: " . $nameUser . "\n" . "E-mail: " . $emailUser . "\n" . "Telefone: " . $phoneUser;
$head = "From: emailfrom@gmail.com" . "\n" . "Reply-to: " . $emailUser . "\n" . "X=Mailer:PHP/" . phpversion(); // email que envia as solicitações

if (mail($to, $subject, $body, $head)) {
    echo("E-mail enviado com sucesso!");
} else {
    echo("Houve um erro ao enviar o e-mail!");
}

?>
