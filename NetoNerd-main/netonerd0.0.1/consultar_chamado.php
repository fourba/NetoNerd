<?php

session_start();
$host = "localhost";
$user = "root";
$password = "";
$database = "u602544677_NetoNerd";

// Conexão com o banco de dados
$conn = new mysqli($host, $user, $password, $database);
// Verifica se o usuário está logado
if (!isset($_SESSION["usuario_logado"]) || $_SESSION["usuario_logado"] !== true) {
  header("Location: index.php");
  exit;
}
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

<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Free HTML5 Website Template " />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    .card-consultar-chamado {
      padding: 30px 0 0 0;
      width: 100%;
      margin: 0 auto;
    }

    .footer-outer {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
        }    
  </style>
</head>

<body>
  <div id="page-wrap">
<div id="fh5co-hero-wrapper">
<nav class="container navbar navbar-expand-lg main-navbar-nav navbar-light">
			<a class="navbar-brand" href="">Neto Nerd</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav nav-items-center ml-auto mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="dicas.php" onclick="$('#fh5co-features').goTo();return false;">Dicas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="chamados_populares.php" onclick="$('#fh5co-reviews').goTo();return false;">Chamados populares</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="login.php"  onclick="$('#fh5co-download').goTo();return false;">Login</a>
					</li>
				</ul>
				<div class="social-icons-header">
        <a href="https://www.facebook.com/profile.php?id=100093194543537"><i class="fab fa-facebook-f"></i></a>
					<a href="https://www.instagram.com/fourba.oficial/?next=%2F"><i class="fab fa-instagram"></i></a>
				</div>
			</div>
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
  <footer class="footer-outer">
		<div class="container footer-inner">
			<div class="footer-three-grid wow fadeIn animated" data-wow-delay="0.66s">
				<div class="column-1-3">
					<h1>Neto<span>Nerd</span></h1>
				</div>
				<div class="column-2-3">
					<nav class="footer-nav">
						<ul>
							<a href="index.php" onclick="$('#fh5co-hero-wrapper').goTo();return false;"><li>Inicio</li></a>
							<a href="dicas.php" onclick="$('#fh5co-features').goTo();return false;"><li>Dicas</li></a>
							<a href="chamados_populares.php" onclick="$('#fh5co-reviews').goTo();return false;"><li>Chamados populares</li></a>
							<a href="https://fourba.com.br" onclick="$('#fh5co-reviews').goTo();return false;"><li>Four_BA</li></a>
							<a href="login.php" onclick="$('#fh5co-download').goTo();return false;"><li class="active">Login</li></a>
						</ul>
					</nav>
				</div>
				<div class="column-3-3">
					<div class="social-icons-footer">
					<a href="https://www.facebook.com/profile.php?id=100093194543537"><i class="fab fa-facebook-f"></i></a>
					<a href="https://www.instagram.com/fourba.oficial/?next=%2F"><i class="fab fa-instagram"></i></a>
					</div>
					<span class="border-bottom-footer"></span>
					<p class="copyright">&copy; 2023 NetoNerd. Todos os direitos reservados. Desenvolvido por: <a href="https://fourba.com.br/" target="_blank">Four_BA</a>.</p>
				</div>
			</div>
		</div>
	</footer>
  </div>
 
</body>
</html>

