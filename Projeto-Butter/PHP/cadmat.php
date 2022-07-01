<!DOCTYPE html>
<html>
<head>
  <title >Nome do site</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
	<?php
		session_start();
	  	if (!$_SESSION['logged']==1) {
          header("login.php");
        }
	?>
  <header>
    <center><h1 class="topo"><img href="../IMAGENS/logo.png" height="50"/> Lorem ipsum </h1></center>
  </header>
  
  <form action="cadmat2" method="POST">
    <label for="nomem"> Nome da matéria </label><br/>
    <input type="text" name="nomem" id="nomem"/>
    <br />
    <label for="topic"> tópico </label><br/>
    <input type="text" name="topic" id="topic"/>
    <br />
    <label for="link"> link </label><br/>
    <input type="text" name="link" id="link"/>
    <br />
    <input type="submit" name="Entrar"/>
  </form>
  

</body>
</html>