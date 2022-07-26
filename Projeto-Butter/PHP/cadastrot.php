<?php
// começar ou retomar uma sessão
session_start();
if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
      header('location: ../index.php');
    //se tiver tentado fazer login e dado um erro
    }elseif(isset($_SESSION['falha']) && $_SESSION['falha'] == true){
    //se não tiver tentado fazer o login
    }else{
    }
?>
<?php
if (!empty($_POST)) {
	include("conectar.php");
	$email = $_POST['email'];
	$nome = $_POST['nome'];
	$senha = md5($_POST['senha']);
	$login = $_POST['login'];
	$nivel = $_POST['nivel'];
	mysqli_query($conexao, "insert into usuario(nome, login, senha, email, nivel) values ('$nome','$login','$senha','$email','$nivel')");
	header("location: login.php");
}else{
	echo"vai tentar bugar a senhora sua mãe";
}

?>