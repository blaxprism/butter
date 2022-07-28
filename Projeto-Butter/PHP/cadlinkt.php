<?php
	// começar ou retomar uma sessão
	session_start();
	if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
		if ($_SESSION['nivel']==2) {
			// nivel 2 -> Permissão admnistrativa
			if (!empty($_POST)) {
				include("conectar.php");
				$curso = $_POST['curso'];
				$user = $_POST['user'];
				$mat = $_POST['mat'];
				$topic = $_POST['topic'];
				$link = $_POST['link'];

				mysqli_query($conexao, "insert into links(id_topico,link) values('$topic','$link')");
				header("location: login.php");

			}else{
				echo"vai tentar bugar a senhora sua mãe";
				header("location: login.php");
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