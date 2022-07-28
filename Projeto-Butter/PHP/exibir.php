<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title >Projeto ED</title>
    <link rel="stylesheet" href="../css/estilos.css">
  </head>
  <body>
    <header header class="o-header">
      <a href="../index.php">
      <center><h1 class="topo"><img href="../IMAGENS/logo.png" height="50"/> Projeto ED </h1></center>
      </a>
    </header>
  <footer class="o-footer">
    <!--<details></details>-->
    <?php
      // começar ou retomar uma sessão
      session_start();
      //se tiver feito o login
      if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
      //se tiver tentado fazer login e dado um erro
      }elseif(isset($_SESSION['falha']) && $_SESSION['falha'] == true){
      //se não tiver feito o login
      }else{
        
      }
    ?>
    <?php
      include("conectar.php");
      $consultacurso=mysqli_query($conexao,"SELECT * from curso");
      $consultamateria=mysqli_query($conexao,"SELECT * from materia ");
      $consultatopico=mysqli_query($conexao,"SELECT * from topico");
      $consultalinks=mysqli_query($conexao,"SELECT link from links");
      while($dadoscurso=mysqli_fetch_array($consultacurso)){
        $curso = $dadoscurso['curso'];
        echo "<h2><u>$curso</u></h2>";
        echo "<hr/>";
        while($dadosmateria=mysqli_fetch_array($consultamateria)){
          $materia=$dadosmateria['materia'];
          echo "<h3>$materia</h3>";
          echo "<hr/>";
          while($dadostopico=mysqli_fetch_array($consultatopico)){
            $topic = $dadostopico['topic'];
            $id_topic = $dadostopico['id_topico'];
            echo "$topic";
            echo "<hr/>";
            $consultalinks=mysqli_query($conexao,"SELECT * from links where id_topico=$id_topic");
            while($dadoslinks=mysqli_fetch_array($consultalinks)){
              $links = $dadoslinks['link'];
              echo "<a href='$links' target='_blank'> $links </a> <br/>";
            }echo "<hr/>";
          }
        }
      }
    ?>
    
   </footer>  
  </body>
</html>