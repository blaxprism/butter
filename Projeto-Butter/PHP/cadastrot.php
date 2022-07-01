<?php
include("conectar.php");
$email = $_POST['email'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$login = $_POST['login'];
$categoria = $_POST['categoria'];
mysqli_query($conexao, "insert into usuario(id_curso,nome, login, senha, email, categoria) values (1,'$nome','$login','$senha','$email','$categoria')");

?>