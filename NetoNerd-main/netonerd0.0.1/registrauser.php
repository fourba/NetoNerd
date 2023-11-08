
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Neto Nerd - Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="FreeHTML5.co" />

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
    <script src="mainLogin.js"></script>
    <style>
        .card-login {
            padding: 30px 0 0 0;
            width: 350px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
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

    <div class="container fh5co-hero-inner">
        <div class="row">
            <div class="card-login">
                <div class="card">
                    <div class="card-header">
                        Cadastre-se
                    </div>
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="form-group">
                                <input id="idade" name="idade" type="number" class="form-control" placeholder="Idade" required>
                            </div>
                            <div class="form-group">
                                <input id="email" name="email" type="email" class="form-control" placeholder="E-mail" required>
                            </div>
                            <div class="form-group">
                                <input id="emailConfirma" name="emailConfirma" type="email" class="form-control" placeholder="Confirme o E-mail" required>
                                <?php if (isset($erroEmail) && $erroEmail): ?>
                                    <div class="text-danger">Os dois emails devem ser iguais!</div>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <input id="senha" name="senha" type="password" class="form-control" placeholder="Senha" required>
                            </div>
                            <div class="form-group">
                                <input id="senhaConfirma" name="senhaConfirma" type="password" class="form-control" placeholder="Confirme a senha" required>
                                <?php if (isset($erroSenha) && $erroSenha): ?>
                                    <div class="text-danger">As duas senhas devem ser iguais!</div>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <input id="cep" name="cep" type="text" class="form-control" placeholder="CEP" required method="post">
                            </div>
                            <div class="form-group">
                                <input id="rua" name="rua" type="text" class="form-control" placeholder="Rua" required>
                            </div>
                            <div class="form-group">
                                <input id="municipio" name="municipio" type="text" class="form-control" placeholder="Município" required>
                            </div>
                            <div class="form-group">
                                <input id="estado" name="estado" type="text" class="form-control" placeholder="Estado" required>
                            </div>
                            <div class="form-group">
                                <input id="telefone" name="telefone" type="tel" class="form-control" placeholder="Telefone para contato" required>
                            </div>
                            <button id="login-button" class="btn btn-lg btn-info btn-block" type="submit">Cadastrar</button>
                           <?php //header('Location: login.php');?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    window.onload = function() {
        const form = document.querySelector('form');
        form.addEventListener('submit', function(event) {
            const email = document.getElementById('email').value;
            const emailConfirma = document.getElementById('emailConfirma').value;
            const senha = document.getElementById('senha').value;
            const senhaConfirma = document.getElementById('senhaConfirma').value;

            if (email !== emailConfirma) {
                alert('Os dois emails devem ser iguais!');
                event.preventDefault();
            }

            if (senha !== senhaConfirma) {
                alert('As duas senhas devem ser iguais!');
                event.preventDefault();
            }
        });
    };
</script>
</body>
</html>
