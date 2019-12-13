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
	<div class="container">
	<?php
		if(!$_SESSION['logged']){
			include_once "login.php";
		}else{
			include_once "index.php";
		}
	?>
	</div>
</body>
</html>
