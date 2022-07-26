<?php
	// começar ou retomar uma sessão
	session_start();
	if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
		if ($_SESSION['nivel']==2) {
			// Permissão admnistrativa
			if (!empty($_POST)) {
				include("conectar.php");
				$curso = $_POST['curso'];
				$user = $_POST['user'];
				mysqli_query($conexao, "insert into curso(curso) values ('$curso')");
				header("location: login.php");

			}else{
				echo"vai tentar bugar a senhora sua mãe";
			}
		}else{
			
		}
    //se tiver tentado fazer login e dado um erro
    }elseif(isset($_SESSION['falha']) && $_SESSION['falha'] == true){
    //se não tiver tentado fazer o login
    	header('location: ../index.php');
    }else{
    	header('location: ../index.php');
    }
?>
<?php


?>