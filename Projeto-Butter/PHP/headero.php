<header>
	<h1 style="vertical-align: middle;">
		<a href="..">
			<img src="../IMAGENS/logo.png" height=70px style="vertical-align: middle;margin-right: 10px;"/>Projeto ED
		</a>
	</h1>
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