<header>
	
	<center><a href=".."><h1 style="display:inline;margin-left: auto; margin-right: auto;">Projeto ED</h1></a></center>
	<div class="divmaior">
	<?php
		//se estiver logado
		if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
			echo "
			<div class='linkheader'>
				<a href='PHP/exibir.php'>Exibir</a>
			</div>
			<div class='linkheader'>
				<a href='PHP/caditens.php'>cadastrar itens</a>
			</div>
			<div class='linkheader'>
				<a href='PHP/sair.php'>Sair</a>
			</div>";
		//se tiver tentado fazer login e dado um erro
		}elseif(isset($_SESSION['falha']) && $_SESSION['falha'] == true){
			echo "
			<div class='linkheader'>
				<a href='PHP/exibir.php'>Exibir</a>
			</div>
			<div class='linkheader'>
				<a href='PHP/login.php'>Login</a>
			</div>
			<div class='linkheader'>
				<a href='PHP/cadastro.php'>Cadastro</a>
			</div>";
		//se não tiver tentado fazer o login
		}else{
			echo "
			<div class='linkheader'>
				<a href='PHP/exibir.php'>Exibir</a>
			</div>
			<div class='linkheader'>
				<a href='PHP/login.php'>Login</a>
			</div>
			<div class='linkheader'>
				<a href='PHP/cadastro.php'>Cadastro</a>
			</div>";
		}
	?>
	</div>
</header>