<header style="border-left-style:none ;border-right-style: none;">
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
					<a href='exibir.php'>Exibir</a>
				</div>
				<div class='linkheader'>
					<a href='caditens.php'>cadastrar itens</a>
				</div>
				<div class='linkheader'>
					<a href='sair.php'>Sair</a>
				</div>";
			//se tiver tentado fazer login e dado um erro
			}elseif(isset($_SESSION['falha']) && $_SESSION['falha'] == true){
				echo "
				<div class='linkheader'>
					<a href='exibir.php'>Exibir</a>
				</div>
				<div class='linkheader'>
					<a href='login.php'>Login</a>
				</div>
				<div class='linkheader'>
					<a href='cadastro.php'>Cadastro</a>
				</div>";
			//se não tiver tentado fazer o login
			}else{
				echo "
				<div class='linkheader'>
					<a href='exibir.php'>Exibir</a>
				</div>
				<div class='linkheader'>
					<a href='login.php'>Login</a>
				</div>
				<div class='linkheader'>
					<a href='cadastro.php'>Cadastro</a>
				</div>";
			}
		?>
	</div>
</header>