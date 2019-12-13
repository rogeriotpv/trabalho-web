<?php
	$logged = $_SESSION['logged'] ?? NULL;

	if(!logged) die('Não está logado, realize o login caso não esteja cadastrado se cadastre.');
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
					</li>v
			</div>
		</div>
			<div class="body">
				<div>
					<form action="" method="get">
						<p>
							Peso:<br>
							<input type="text" name="peso" >
						</p>
						<p>
							Altura(use pontuação ex:1.70):<br>
							<input type="text" name="altura" >
						</p>
						<p>
							<input type="submit" value="Enviar">
						</p>
					</form>
						
					<?php 
						$peso = $_GET['peso'];
						$altura = $_GET['altura'];
						
						$conta1 = $altura*$altura;
						$conta2 = $peso/$conta1;
						
						$resultado = number_format($conta2);
						
						if(isset($resultado) && $resultado != '0'){;	
							echo '<h1>Seu IMC é:</h1>';
							echo '<h2>'.$resultado.'</h2>';
						}else{
							echo '<h1>Por favor, utilize apenas numeros!</h1>';	
						}
					?>
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