<!DOCTYPE html>
<html lang="en">
<head>
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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                <ul class="navbar-nav ml-auto">
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

        <div class="container fh5co-hero-inner">
            <h1 class="animated fadeIn wow" data-wow-delay="0.4s">Neto Nerd, resolvendo seus problemas.</h1>
            <p class="animated fadeIn wow" data-wow-delay="0.67s">Olá, seja muito bem-vindo(a)! <br>Infelizmente ainda estamos desenvolvendo esse site. Se quiser você pode ir em dicas (<b>Logo aqui em baixo</b>) que separamos algumas informações que podem te ajudar.</p>
            <button-type class="btn btn-md download-btn-first wow fadeInLeft animated" data-wow-delay="0.85s" onclick="$('#fh5co-download').goTo();return false;">Dicas</button>
            <button-type class="btn btn-md features-btn-first animated fadeInLeft wow" data-wow-delay="0.95s"><a href="login.php">Login</a></button>
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
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
