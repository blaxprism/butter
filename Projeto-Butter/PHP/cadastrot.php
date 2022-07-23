<?php
include("conectar.php");
$email = $_POST['email'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$login = $_POST['login'];
$nivel = $_POST['nivel'];
mysqli_query($conexao, "insert into usuario(nome, login, senha, email, nivel) values ('$nome','$login','$senha','$email','$nivel')");
	header("location: login.php");
?>