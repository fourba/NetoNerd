<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "u602544677_netonerd";

try {
    $conn = new mysqli($host, $user, $password, $database);
    if ($conn->connect_error) {
        throw new Exception("Erro ao conectar ao banco de dados: " . $conn->connect_error);
    }

    $idade = isset($_POST['idade']) ? $_POST['idade'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $emailConfirma = isset($_POST['emailConfirma']) ? $_POST['emailConfirma'] : null;
    $senha = isset($_POST['senha']) ? $_POST['senha'] : null;
    $senhaConfirma = isset($_POST['senhaConfirma']) ? $_POST['senhaConfirma'] : null;
    $cep = isset($_POST['cep']) ? $_POST['cep'] : null;
    $rua = isset($_POST['rua']) ? $_POST['rua'] : null;
    $municipio = isset($_POST['municipio']) ? $_POST['municipio'] : null;
    $estado = isset($_POST['estado']) ? $_POST['estado'] : null;
    $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : null;

    // Verificar se os campos obrigatórios foram preenchidos
    

    // Verificar se os emails e senhas coincidem
    if ($email !== $emailConfirma) {
        die("Os emails não coincidem.");
    }

    if ($senha !== $senhaConfirma) {
        die("As senhas não coincidem.");
    }

    // Crie a consulta SQL preparada
    $sql = "INSERT INTO usuarios (idade, email, senha, cep, rua, municipio, estado, telefone) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Vincule os parâmetros à consulta SQL
    $stmt->bind_param("ssssssss", $idade, $email, $senha, $cep, $rua, $municipio, $estado, $telefone);

    // Execute a consulta
   

} catch (Exception $e) {
    header('Location: index.php');
    echo "Ocorreu um erro: " . $e->getMessage();
}
?>
