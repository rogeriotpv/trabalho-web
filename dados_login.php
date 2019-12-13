<?php
session_start();
$_SESSION['logged'] = $_SESSION['logged'] ?? false;

$pdo = new PDO('mysql:host=localhost;dbname=cadastro','root','');
$sql = $pdo->prepare("SELECT 'usuario' FROM usuario");

$sql->execute();
$info = $sql->fetchALL();
 foreach ($info as $key => $value) {
 	$value = $_SESSION['usuario'];

	$p_usuario = $_POST['usuario'] ?? NULL;

	if($p_usuario == $value){
		$_SESSION['usuario'] = $value;
		$_SESSION['logged'] = True;
	}
 }

