<?php 
$host = "localhost";
$user = "root";
$password = "";
$database = "u602544677_NetoNerd";
// Conexão com o banco de dados
$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Erro ao conectar ao banco de dados: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    // Consulta SQL para verificar o usuário
    $query = "SELECT id FROM usuarios WHERE email = ? AND senha = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $email, $senha); // Não há criptografia aqui
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id); // Bind do resultado para a variável $id
        $stmt->fetch();
        session_start();
        $_SESSION["usuario_logado"] = true;
        $_SESSION["id"] = $id; // Define o ID do usuário na sessão
        header("Location: home.php");
        exit;
    } else {
        header("Location: index.php?login=erro");
        exit;
    }    
}
$conn->close();