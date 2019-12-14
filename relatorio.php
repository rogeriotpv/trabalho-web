<?php
	include_once("config.php");
	include_once("conection.php");
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
						Lista dos resultados de imc:
						<?php 
						$pdo = new PDO('mysql::host=localhost;dbname=cadastro','root','');
						$sql = $pdo->prepare("SELECT * FROM imc");
						$sql->execute();
						$info = $sql->fetchALL();
						foreach($info as $key => $value){
							echo '<br>imc<br>'.$value['imc'];
						}
						?>
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
