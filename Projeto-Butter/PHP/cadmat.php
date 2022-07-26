<!DOCTYPE html>
<html>
<head>
  <title >Nome do site</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
  <header>
    <a href="../index.php">
    <center><h1 class="topo"><img href="../IMAGENS/logo.png" height="50"/> Lorem ipsum </h1></center>
    </a>
  </header>
  <?php
    session_start();
    if (!$_SESSION['logged']==1) {
        header("login.php");
    }
    include("conectar.php");
    $topic = $_POST['topic'];
    $mat = $_POST['nomem'];
    $link = $_POST['link'];
    mysqli_query($conexao, "insert into links(topic, link, mat) values ('$topic','$link','$mat')");

  ?>
  

</body>
</html>