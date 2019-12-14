<?php
	//include_once 'dados_login.php';
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
				<ul id="navigation">
					<li class="selected">
						<a href="home.php">Home</a>
					</li>
					<li class="cadastro">
						<a href="cadastro.php">cadastro</a>
					</li>					
					<li class="login">
						<a href="login.php">Login</a>
					</li>
			</div>
		</div>
			<div class="body">
				<div>
					<?php 
						if(isset($_POST['acao'])){

							//$conn = DBConnect();
							//$dados['login'] = mysql_escape_string($conn, $_POST['login']);
							//$dados['senha'] = mysql_escape_string($conn, $_POST['senha']);
							 echo '<a href="index.php">Clique aqui para ir a home</a>';
						}
					 ?>
					<form method="post">
						<p>
							Usuario:<br>
							<input type="text" name="usuario">
						</p>
						<p>
							Senha:<br>
							<input type="password" name="senha">
						</p>
						<p>
							<input type="submit" name="acao" value="Enviar">
						</p>
					</form>
					<a href="cadastro.php">cadastre-se</a>
				</div>
			</div>
			
		<style>
			.footer {
			  position: fixed;
			  left: 0;
			  bottom: 0;
			  width: 100%;
			  background-color: #ADD8E6;
			  color: white;
			  text-align: center;
			}
			</style>

			<div class="footer">
			  <h1>Saude e alimentação</h1>
			</div>
		
		</div>
	</div>

</body>
</html>