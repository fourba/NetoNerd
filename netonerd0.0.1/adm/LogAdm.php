<?php
session_start();

// Defina o email e senha do administrador
$adminEmail = "adm@netonerd.com.br";
$adminSenha = "Neto2023nerd";

// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Verifique se as credenciais coincidem com as do administrador
    if ($email === $adminEmail && $senha === $adminSenha) {
        // Credenciais corretas, redirecione para a área administrativa
        $_SESSION["admin_logado"] = true;
        header("Location: AdmChamados.php");
        exit;
    } else {
        // Credenciais incorretas, exiba uma mensagem de erro
        $erro = "Credenciais incorretas. Tente novamente.";
    }
}
?>
