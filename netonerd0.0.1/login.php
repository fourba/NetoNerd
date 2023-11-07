<html>
  <head>
    <title>Neto Nerd</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content=" " />
	<meta name="keywords" content="" />

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
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/style.css">
    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
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
						<!-- <a class="nav-link" href="index.php"  onclick="$('#fh5co-download').goTo();return false;">Login</a> -->
					</li>
				</ul>
				<div class="social-icons-header">
					<a href="netonerd.html"><i class="fab fa-facebook-f"></i></a>
					<a href="netonerd.html"><i class="fab fa-instagram"></i></a>
					<a href="netonerd.html"><i class="fab fa-twitter"></i></a>
				</div>
			</div>
		</nav>
    	<div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="valida_login.php" method="post">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>
              <a href="registrauser.php">Registrar</a>
                <?php

                  if(isset($_GET['login']) && $_GET['login'] == 'error') {  

                  ?>

                ...

                <?php } ?>

                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </div>
  </div>

   
  </body>
</html>