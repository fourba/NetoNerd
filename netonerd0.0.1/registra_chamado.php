<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$database = "u602544677_NetoNerd";

try {
    $conn = new mysqli($host, $user, $password, $database);
    if ($conn->connect_error) {
        die("Erro ao conectar ao banco de dados: " . $conn->connect_error);
    }

    $usuario_id = $_SESSION['id']; // Utilizando o ID do usuário da sessão

    // Verifique se o usuário com o ID especificado existe na tabela de usuários.
    $verificaUsuarioQuery = "SELECT id FROM usuarios WHERE id = ?";
    $verificaUsuarioStmt = $conn->prepare($verificaUsuarioQuery);
    $verificaUsuarioStmt->bind_param("i", $usuario_id);
    $verificaUsuarioStmt->execute();
    $verificaUsuarioResult = $verificaUsuarioStmt->get_result();

    if ($verificaUsuarioResult->num_rows > 0) {
        // O usuário com o ID especificado existe, você pode continuar com as operações.

        // AQUI VOCÊ PODE INSERIR O CÓDIGO PARA REGISTRAR O CHAMADO, POR EXEMPLO:
        $titulo = $_POST['titulo'];
        $categoria = $_POST['categoria'];
        $descricao = $_POST['descricao'];

        $stmt = $conn->prepare("INSERT INTO chamados (usuario_id, titulo, categoria, descricao) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isss", $usuario_id, $titulo, $categoria, $descricao);

        if ($stmt->execute()) {
            header('Location: abrir_chamado.php');
        } else {
            echo "Erro ao registrar chamado: " . $stmt->error;
        }

        $stmt->close();

    } else {
        // O usuário com o ID especificado não existe.
        // Trate o erro ou exiba uma mensagem apropriada.
        echo "Erro: Usuário não encontrado ou não está logado.";
    }

    $verificaUsuarioStmt->close();
    $conn->close();
} catch (Exception $e) {
    echo "Exceção capturada: " . $e->getMessage();
}
?>
