<!DOCTYPE html>
<html>
<head>
	<title>Projeto ED</title>
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
	<article id="corpo">
		<?php
			// começar ou retomar uma sessão
			session_start();
			include("php/headeri.php");
		?>
		<article id="text">
		
		<div id="janela" style="display: none; position: relative;">
			<iframe id="iframelibras" name="iframelibras" frameborder="3" height="50%" width="40%"></iframe>
		</div>

		<div id="formli" style="display: none; position: relative;">
			<iframe id="iframelibras" name="iframetext" frameborder="3" height="60%" width="100%"></iframe>
		</div>

		<input type="button" name="alert" id="alert" value="libras" onClick="javascript: abrir();"/>
		</article>
	</article>
	<br/>
</body> 
</html>