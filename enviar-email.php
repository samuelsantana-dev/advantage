<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['name-3'];
    $email = $_POST['email-3'];
    $telefone = $_POST['Phone'];
    $mensagem = $_POST['Message'];

    $destinatario = "contato@aresgroup.com.br";
    $assunto = "Nova mensagem de $nome";

    $corpo = "Nome: $nome\n";
    $corpo .= "E-mail: $email\n";
    $corpo .= "Telefone: $telefone\n";
    $corpo .= "Mensagem: $mensagem\n";

    $cabecalho = "From: $email\r\n";
    $cabecalho .= "Reply-To: $email\r\n";

    if (mail($destinatario, $assunto, $corpo, $cabecalho)) {
        echo "<script>alert('Mensagem enviada com sucesso!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Falha ao enviar a mensagem.'); window.history.back();</script>";
    }
}
?>
