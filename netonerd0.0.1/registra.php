<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$host = "localhost";
$user = "root";
$password = "";
$database = "u602544677_NetoNerd";
$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Erro ao conectar ao banco de dados: " . $conn->connect_error);
}
// Consulta para selecionar todos os registros de usuários
$selectQuery = "SELECT * FROM usuarios";
$result = $conn->query($selectQuery);

$erroEmail = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idade = $_POST["idade"];
    $email = $_POST["email"];
    $emailConfirma = $_POST["emailConfirma"];
    $senhaConfirma = $_POST["senhaConfirma"];
    $cep = $_POST["cep"];
    $rua = $_POST["rua"];
    $municipio = $_POST["municipio"];
    $estado = $_POST["estado"];
    $telefone = $_POST["telefone"];
    // Verifica se o email já está cadastrado
    $emailVerificaQuery = "SELECT * FROM usuarios WHERE email = ?";
    $emailVerificaStmt = $conn->prepare($emailVerificaQuery);
    $emailVerificaStmt->bind_param("s", $email);
    $emailVerificaStmt->execute();
    $emailVerificaResult = $emailVerificaStmt->get_result();
    if ($emailVerificaResult->num_rows > 0) {
        $erroEmail = true;
    }
    $emailVerificaStmt->close();
    if ($erroEmail) {
        // Email já cadastrado, mostra erro
        echo "<script>alert('Este email já está cadastrado!'); </script>";
    } else {
        // Continuar com o processamento normal do cadastro
        if ($email !== $emailConfirma) {
            $erroEmail = true;
        }
        if (!$erroEmail) {
            $query = "INSERT INTO usuarios (idade, email, senha, cep, rua, municipio, estado, telefone) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("isssssss", $idade, $email, $senhaConfirma, $cep, $rua, $municipio, $estado, $telefone);
            header("Location: login.php?UserRegistred");
            if ($stmt->execute()) {
            } else {
                // Erro ao cadastrar usuário
                echo "Erro ao cadastrar usuário: " . $stmt->error;
            }
            $stmt->close();
        }
    }
    
}
?>
