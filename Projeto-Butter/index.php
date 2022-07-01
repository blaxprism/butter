<!DOCTYPE html>
<html>
<head>
	<title >Nome do site</title>
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
	<body>
		<header class="o-header">
			<center><h1 class="topo"><img href="../IMAGENS/logo.png" height="50"/> Lorem ipsum </h1></center>
		    
			<button class="botao" type="button">
				<a href="PHP/login.php">login</a>
			</button>
			<button class="botao" type="button">
				<a href="PHP/cadastro.PHP">cadastro</a>
			</button>
			<button class="botao" type="button">
				<a href="PHP/exibir.php">Exibir</a>
			</button>
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
	</body>
</html>
