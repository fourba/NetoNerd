
<?php

session_start();
include_once("BandoDeDados/conectaBd.php");
// Verifica se o usuário está logado
if (!isset($_SESSION["usuario_logado"]) || $_SESSION["usuario_logado"] !== true) {
    header("Location: index.php");
    exit;
}
$host = "localhost";
$user = "root";
$password = "";
$database = "neto_nerd_bd";

try {
    $conn = new mysqli($host, $user, $password, $database);
    if ($conn->connect_error) {
        die("Erro ao conectar ao banco de dados: " . $conn->connect_error);
    }

    $chamados = array();

    // Consulta SQL para recuperar os chamados do usuário atual
    $usuario_id = $_SESSION['id'];
    $query = "SELECT usuario_id, titulo, categoria, descricao FROM chamados WHERE usuario_id = $usuario_id";
    $result = $conn->query($query);

    while ($row = $result->fetch_assoc()) {
        $chamados[] = $row;
    }

    $conn->close();
} catch (Exception $e) {
    echo "Exceção capturada: " . $e->getMessage();
}
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
        <a href="logout.php" class="btn btn-danger">Sair</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

      <div class="card-consultar-chamado">
  <div class="card">
    <div class="card-header">
      Consulta de chamado
    </div>

    <div class="card-body">

      <?php foreach ($chamados as $chamado_dados) { ?>
        <div class="card mb-3 bg-light">
          <div class="card-body">
            <h5 class="card-title"><?= $chamado_dados['titulo'] ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $chamado_dados['categoria'] ?></h6>
            <p class="card-text"><?= $chamado_dados['descricao'] ?></p>
          </div>
        </div>
      <?php } ?>

      <div class="row mt-5">
        <div class="col-6">
          <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
        </div>
      </div>
    </div>
  </div>
</div>
      </div>
    </div>
  </body>
</html>
