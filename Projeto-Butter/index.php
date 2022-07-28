<!DOCTYPE html>
<html>
<head>
	<title >Projeto ED</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="CSS/estilos.css">
	<script language="javascript">
		function abrir(){
			document.getElementById('formli').style.display='';
			window.open('PHP/libras.php', "iframetext");

			function positionElement(el, x, y) {
				el.style.position = 'absolute';
				el.style.left = x + '%';
				el.style.top = y + '%';
			}

			const box = document.getElementById('formli');
			console.log(positionElement(box, 2, 80));

			console.log(box.style.left); 
			console.log(box.style.top); 
		}
	</script>
</head>

	<header class="o-header">
		<div class="img"></div>
		<center><h1 class="topo">Projeto ED</h1></center>
	    
		<?php
			// começar ou retomar uma sessão
			session_start();
			//se estiver logado
			if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
				echo "
				<button class='botao' type='button'>
					<a href='PHP/exibir.php'>Exibir</a>
				</button>
				<button class='botao' type='button'>
					<a href='PHP/caditens.php'>cadastrar itens</a>
				</button>
				<button class='botao' type='button'>
					<a href='PHP/sair.php'>Sair</a>
				</button>";
			//se tiver tentado fazer login e dado um erro
			}elseif(isset($_SESSION['falha']) && $_SESSION['falha'] == true){
				echo "
				<button class='botao' type='button'>
					<a href='PHP/login.php'>Login</a>
				</button>
				<button class='botao' type='button'>
					<a href='PHP/cadastro.php'>Cadastro</a>
				</button>";
			//se não tiver tentado fazer o login
			}else{
				echo "
				<button class='botao' type='button'>
					<a href='PHP/exibir.php'>Exibir</a>
				</button>
				<button class='botao' type='button'>
					<a href='PHP/login.php'>Login</a>
				</button>
				<button class='botao' type='button'>
					<a href='PHP/cadastro.php'>Cadastro</a>
				</button>";
			}
		?>
	</header>


       <main class="o-main">
             <h2 class="topo" style="color: white">   Materiais Extras   </h1>	




        </main>

        <footer class="o-footer">
		<p align= "justify">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			<br/>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
		  
		<div id="janela" style="display: none; position: absolute;">
			<iframe id="iframelibras" name="iframelibras" frameborder="3" height="50%" width="40%"></iframe>
		</div>

		<div id="formli" style="display: none; position: absolute;">
			<iframe id="iframelibras" name="iframetext" frameborder="3" height="60%" width="100%"></iframe>
		</div>

		<input type="button" name="alert" id="alert" value="libras" onClick="javascript: abrir();"/>
		<br/>
		</footer>    
</html>