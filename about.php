<?php
	include_once("config.php");
	include_once("conection.php");
	//$logged = $_SESSION['logged'] ?? NULL;

	//if(!logged) die('Não está logado, realize o login caso não esteja cadastrado se cadastre.');
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Saude e Alimentação</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div>
				<div color="green">
				<h2>Saude e Alimentação</h2>
				</div>
				<ul id="navigation">
					<li class="selected">
						<a href="index.php">Home</a>
					</li>
					<li class="menu">
						<a href="about.php">Sobre</a>
					</li>
					<li class="menu">
						<a href="imc.php">Calculo imc</a>
					</li>
					<li class="selected">
						<a href="relatorio.php">Relatorio imc</a>
					</li>
			</div>
		</div>
		<div id="body" class="home">
			<div class="header">
				<img src="images/telainicio.jfif" alt="">
				<div>
					<a href="imc.php">Calcular imc</a>
				</div>
			</div>
			<div class="body">
				<div>
					<div>
						<h1>Sobre o site</h1>
						<p>site voltado a noticias e calculo de imc.</p>
						<p>referencias:
							https://www.portaleducacao.com.br/conteudo/artigos/nutricao/obesidade-uma-doenca-causada-pela-ma-alimentacao/60207
						</p>
						<br>
						<p>
							https://mundoeducacao.bol.uol.com.br/saude-bem-estar/alimentacao-saude-1.htm
						</p>
						
					</div>
				</div>
			</div>
			<div class="footer">
				<div>
					<ul>
						<li>
							<h1>Home</h1>
						</li>
						<li>
							<h1>Sobre</h1>
						</li>
						<li>
							<h1>IMC</h1>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="footer">
			<div>
				<p>Saude e Alimentação.</p>
			</div>
		</div>
	</div>
</body>
</html>
