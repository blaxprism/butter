<header>
	<center><h1>Projeto ED</h1></center>
	<?php
		//se estiver logado
		if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
			echo "
			
				<a href='exibir.php'>Exibir</a>
			
			
				<a href='caditens.php'>cadastrar itens</a>
			
			
				<a href='sair.php'>Sair</a>
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
			
				<a href='exibir.php'>Exibir</a>
			
			
				<a href='login.php'>Login</a>
			
				<a href='cadastro.php'>Cadastro</a>";
		}
	?>
</header>