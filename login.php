<?php
	include_once 'dados_login.php';
	
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
						<a href="home.php">Home</a>
			</div>
		</div>
			<div class="body">
				<div>
					<form action="" method="post">
						<p>
							Usuario:<br>
							<input type="text" name="usuario">
						</p>
						<p>
							Senha:<br>
							<input type="password" name="senha">
						</p>
						<p>
							<input type="submit" value="Enviar">
						</p>
					</form>
					<a href="cadastro.php">cadastre-se</a>
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
