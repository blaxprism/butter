<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title >C.C.E</title>
    <link rel="stylesheet" href="../css/estilos.css">
  </head>
  <body>
    <header header class="o-header">
      <a href="../index.php">
      <center><h1 class="topo"><img href="../IMAGENS/logo.png" height="50"/> C.E.E </h1></center>
      </a>
    </header>
  <footer class="o-footer">
  <?php
    include("conectar.php");
    echo "<h2>Libras</h2><hr/>";
    $consulta=mysqli_query($conexao,"SELECT * from links where mat='libras'");
    while($dados=mysqli_fetch_array($consulta)){
      $link=$dados['link'];
      $topic=$dados['topic'];
      echo "<b>$topic</b>: <a href='$link'> $link </a> <br/><br/>";
    }echo "<hr/>";

    echo "<h2>Matemática - 3° ano</h2><hr/>";
    $consulta=mysqli_query($conexao,"SELECT * from links where mat='matematica'");
    while($dados=mysqli_fetch_array($consulta)){
      $link=$dados['link'];
      $topic=$dados['topic'];
      echo "<b>$topic</b>: <a href='$link'> $link </a> <br/><br/>";
    }echo "<hr/>";
    ?>  
   </footer>  
  </body>
</html>