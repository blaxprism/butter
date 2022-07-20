<?php
include("conectar.php");
// começar ou retomar uma sessão
session_start();
// se vier um pedido para login
if (!empty($_POST)) { 
	// receber o pedido de login com segurança
	$username = $_POST['login'];
	$password = $_POST['senha'];
	// verificar o utilizador em questão (pretendemos obter uma única linha de registos)
	$login = mysqli_query($conexao,"SELECT id_usuario FROM usuario WHERE login = '$username' AND senha = '$password'");
	if ($login && mysqli_num_rows($login) == 1) {
		$_SESSION['username']=$username;
		$_SESSION['logged']=1;
		$_SESSION['falha']=null;
		echo "<p>Sessão iniciada com sucesso como {$_SESSION['username']}</p>";
		header("location: ../index.php");

	} else {
		// falhou o login
		$_SESSION['falha']="falha";
		header("location: login.php");
	}

}else{
	header("location: login.php");
}
?>