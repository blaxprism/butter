<header>
	<h1 style="vertical-align: middle;">
		<img src="IMAGENS/logo.png" height=70px" style="vertical-align: middle;text-align: left;"/>
		Projeto ED
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
	<input type="button" name="alert" id="alert" value="libras" onClick="javascript: abrir();"/>
		
	<article id="corpo">
		<article id="text">
		
		<div id="janela" style="display: none; position: relative;">
			<iframe id="iframelibras" name="iframelibras" frameborder="3" height="50%" width="40%"></iframe>
		</div>

		<div id="formli" style="display: none; position: relative;">
			<iframe id="iframelibras" name="iframetext" frameborder="3" height="60%" width="100%"></iframe>
		</div>
		</article>
		
	</article>
	</div>
</header>