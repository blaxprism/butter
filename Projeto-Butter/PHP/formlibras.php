<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title></title>
	<link rel="icon" href="../imagens/logo.png"/>
</head>
<body>
	<?php
		// começar ou retomar uma sessão
		session_start();
	?>
	<!-- botao de fechar -->
	<div class="alert"> 
        <span class="closebtn" onClick="window.frameElement.parentElement.style.display='none';">&times;</span>
    </div>
<br><br><br><br><br>
    <!-- input do texto -->
	<div class="formlibras">
		<form action="libras.php" method="POST" >
	      <input type="text" name="textotraduzir" id="textotraduzir" placeholder="Texto para traduzir" required="required" />
	      <input type="submit" name="traduzir" value="traduzir">
	    </form>
	</div>
</body>
</html>