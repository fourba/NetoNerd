<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Inicie a sessão antes de acessar $_SESSION
session_start();

// Verifica se o usuário está logado
include_once("BandoDeDados/conectaBd.php");
if (!isset($_SESSION["usuario_logado"]) || $_SESSION["usuario_logado"] !== true) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Neto Nerd</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free HTML5 Website Template " />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />

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
        .alinhar {
            align-items: center;
            margin-left: 35%;
            margin-top: 10%;
        }
        .menu-link {
            text-decoration: none;
            color: #333;
            transition: background-color 0.3s, color 0.3s;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-weight: bold;
        }
        .menu-link:hover {
            background-color: #f0f0f0;
            color: #007bff;
            border-color: #007bff;
        }
        .opcao {
            padding-left: 10px;
            padding-right: 10px;
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
                    <a href="logout.php" class="btn btn-danger">Sair</a>
                    <div class="social-icons-header">
                    <a href="https://www.facebook.com/profile.php?id=100093194543537"><i class="fab fa-facebook-f"></i></a>
					<a href="https://www.instagram.com/fourba.oficial/?next=%2F"><i class="fab fa-instagram"></i></a>
                        
                    </div>
                </div>
            </nav>
            <div class="row alinhar">
                <div class="card-home center-content">
                    <div class="card">
                        <div class="card-header">
                            Menu
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 d-flex justify-content-center opcao">
                                    <a href="abrir_chamado.php" class="menu-link">
                                        Abrir Chamado
                                    </a>
                                </div>
                                <div class="col-6 d-flex justify-content-center opcao">
                                    <a href='consultar_chamado.php' class="menu-link">
                                    <span>  Consultar Chamado</span>
                                    </a>
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
