<!DOCTYPE html>
<html>
<head>
  <title>Projeto ED</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="../css/estilos.css">
  <link rel="icon" href="../imagens/logo.png"/>

</head>
<body>
  <?php
    // começar ou retomar uma sessão
    session_start();
    //se estiver logado
    if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
    //se tiver tentado fazer login e dado um erro
    }elseif(isset($_SESSION['falha']) && $_SESSION['falha'] == true){
    //se não tiver tentado fazer o login
      header('location: ../index.php');
    }else{
      header('location: ../index.php');
    }
  ?>
  <?php
    include("headero.php");
  ?>
  
  <footer class="o-footer">
  <form action="cadtopict.php" method="POST">
    <hr/>
    <label for="curso">Curso:</label><br/>
    <?php
      include("conectar.php");
      $consultacurso=mysqli_query($conexao,"SELECT * from curso");
      while($dadoscurso=mysqli_fetch_array($consultacurso)){
        $id_curso = $dadoscurso['id_curso'];
        $curso = $dadoscurso['curso'];
        echo "<input type='radio' required name='curso' id='$id_curso' value='$id_curso'/><label for='curso'>$curso</label><br/>";
      }echo "<hr/>";
      $consultamat=mysqli_query($conexao,"SELECT * from materia");
      while($dadosmat=mysqli_fetch_array($consultamat)){
        $id_mat = $dadosmat['id_materia'];
        $mat = $dadosmat['materia'];
        echo "<input type='radio' required name='mat' id='$id_mat' value='$id_mat/><label for='mat'>$mat</label><br/>";
      }echo "<hr/>";
    ?>
    <label for="topic">Tópico</label><br/>
    <input type="text" required name="topic" id="topic"/>
    <br />
    
    <?php 
    echo "<input type='hidden' name='user' id='user' value='".$_SESSION['username']."'>"
    ?>
    
    <input type="submit" name="Entrar" id="Entrar" />
  </form>
  </footer>

</body>
</html>