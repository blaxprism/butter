<header>
	<center><h1>Projeto ED</h1></center>
	<?php
		//se estiver logado
		if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
			echo "
			
				<a href='PHP/exibir.php'>Exibir</a>
			
			
				<a href='PHP/caditens.php'>cadastrar itens</a>
			
				<a href='PHP/sair.php'>Sair</a>
			";
		//se tiver tentado fazer login e dado um erro
		}elseif(isset($_SESSION['falha']) && $_SESSION['falha'] == true){
			echo "
				<a href='PHP/exibir.php'>Exibir</a>

				<a href='PHP/login.php'>Login</a>
			
				<a href='PHP/cadastro.php'>Cadastro</a>
			";
		//se não tiver tentado fazer o login
		}else{
			echo "
			
				<a href='PHP/exibir.php'>Exibir</a>
			
				<a href='PHP/login.php'>Login</a>
			
				<a href='PHP/cadastro.php'>Cadastro</a>
			";
		}
	?>
</header>