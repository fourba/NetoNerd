<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "u602544677_NetoNerd";

try {
    $conn = new mysqli($host, $user, $password, $database);
    if ($conn->connect_error) {
        die("Erro ao conectar ao banco de dados: " . $conn->connect_error);
    }

    $chamados = array();

    // Consulta SQL para recuperar os chamados
    $query = "SELECT titulo, categoria, descricao FROM chamados";
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
  <div id="page-wrap ">
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
    <nav id="area-principal">
        <div id="area-postagens">
            <div class="postagem">
                <h1 class="titulo">Computador não liga</h1>

                <texto class="data-postagem">Postado em <data>10/10/2023</data></texto><br>
                <img class="imagem" src="images/imagem1.jpg" alt="">
                <p>
                Verifique as conexões: Certifique-se de que todos os cabos de energia estejam bem conectados, tanto na tomada quanto no computador.
                <hr>

                Botão de ligar/desligar: Pressione o botão de ligar/desligar no computador e certifique-se de que ele está ligado. <hr>

                Tente uma tomada diferente: Se o computador ainda não ligar, conecte-o a uma tomada diferente para garantir que não seja um problema na fonte de energia.<hr>

                Peça ajuda: Se o problema persistir, faça um chamado clicando em <b>Login</b> para que possamos ir resolver seu problema! .<hr>
				        </p>
        </div>
            <div class="postagem">
                <h1 class="titulo">Tela</h1>

                <texto class="data-postagem">Postado em <data>10/10/2023</data></texto><br>
                <img class="imagem" src="images/imagem2.jpg" alt="">
                <p>
                Brilho e contraste: Se a tela estiver muito clara ou escura, peça ajuda para encontrar os botões no monitor e ajuste o brilho até ficar confortável aos olhos.<hr>

                Limpeza da tela: Use um pano macio e seco para remover poeira e impressões digitais da tela. Dê leves batidinhas para limpar.<hr>

                Resolução da tela: Se os icones parecem pequenos, contate-nos para que possamos ajustar as configurações para você<hr>

                Não toque na tela: Lembre-se de não tocar na tela, a menos que seja uma tela sensível ao toque. Isso evita marcas e manchas.<hr>
				        </p>
            </div>
            <div class="postagem">
                <h1 class="titulo">Tela</h1>

                <texto class="data-postagem">Postado em <data>10/10/2023</data></texto><br>
                <img class="imagem" src="images/imagem2.jpg" alt="">
                <p>
                Letras e Números: Use as teclas com letras e números para escrever textos ou números. <hr>

                Barra de Espaço: A tecla grande na parte de baixo é para separar as palavras.<hr>

                Enter: A tecla "Enter" serve para começar uma nova linha ou enviar informações.<hr>

                Apagar Erros: Se você cometer um erro, use a tecla com a seta apontando para a esquerda para apagar o que escreveu.<hr>

                Caixa Alta: Para letras maiúsculas, segure a tecla "Shift" (uma seta para cima) e depois pressione a letra.<hr>

                Setas: As teclas com setas para cima, baixo, esquerda e direita movem o cursor na tela.<hr>

                Espaço Limpo: Mantenha o teclado limpo e livre de migalhas.<hr>
				        </p>
            </div>
            
            

        <div class="container">    
      <div class="row">

      <div class="card-consultar-chamado">
  <div class="card">
    <div class="card-header">
      Chamados feitos
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
    </div>
  </div>
</div>
      </div>
    </div>
    </nav>
  </div>
  
</div>

  </body>
</html>
