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
  	if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
    //se tiver tentado fazer login e dado um erro
    }elseif(isset($_SESSION['falha']) && $_SESSION['falha'] == true){
      header('location: ../index.php');
    }else{
      header('location: ../index.php');
    }
	?>
  <header> 
   <a href="../index.php">
    <center><h1 class="topo"><img href="../IMAGENS/logo.png" height="50"/> C.E.E </h1></center>
	 </a>
  </header>
  
  <ul>
    <b>Realizar cadastro de:</b>
    <li><a href="cadcurso.php">Curso</a></li>
    <li><a href="cadmat.php">Matéria</a></li>
    <li><a href="cadtopic.php">Tópico</a></li>
    <li><a href="cadlink.php">Link</a></li>
  </ul>
  

</body>
</html>