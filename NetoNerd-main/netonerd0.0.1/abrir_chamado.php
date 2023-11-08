<?php
session_start();
include_once("BandoDeDados/conectaBd.php");
// Verifica se o usuário está logado
if (!isset($_SESSION["usuario_logado"]) || $_SESSION["usuario_logado"] !== true) {
    header("Location: index.php");
    exit;
}
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Chamados Populares</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Neto Nerd</title>
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
    <style>
      .card-login {
        /* padding: 30px 0 0 0; */
        width: 90%;
        height: 90%;
        margin-left: 5%;
      }
    </style>
  </head>

  <body>
  <div id="page-wrap">
	<div id="fh5co-hero-wrapper">
		<nav class="container navbar navbar-expand-lg main-navbar-nav navbar-light">
			<a class="navbar-brand" href="index.php">Neto Nerd</a>
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
						<!-- <a class="nav-link" href="index.php"  onclick="$('#fh5co-download').goTo();return false;">Login</a> -->
					</li>
				</ul>
        <a href="logout.php" class="btn btn-danger">Sair</a>
				<div class="social-icons-header">
        <a href="https://www.facebook.com/profile.php?id=100093194543537"><i class="fab fa-facebook-f"></i></a>
					<a href="https://www.instagram.com/fourba.oficial/?next=%2F"><i class="fab fa-instagram"></i></a>
					
				</div>
			</div>
		</nav>
    <div class="container">    
    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Abertura de chamado
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form method="post" action="registra_chamado.php">
                    <div class="form-group">
                      <label>Título</label>
                      <input name="titulo" type="text" class="form-control" placeholder="Título">
                    </div>
                    
                    <div class="form-group">
                      <label>Categoria</label>
                      <select name="categoria" class="form-control">
                        <option>Computador</option>
                        <option>Impressora</option>
                        <option>Celular</option>
                        <option>Tablet</option>
                        <option>Outros</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Descrição</label>
                      <textarea name="descricao" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="row mt-5">
                      <div class="col-6">
                        <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
  </div>

   
  </body>
</html>















