<!DOCTYPE html>
<html>
<head>
  <title>Projeto ED</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="icon" href="../imagens/logo.png"/>
  <link rel="stylesheet" href="../css/estilos.css">
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
  <form action="cadcursot.php" method="POST">
    <label for="curso">Curso</label><br/>
    <input type="text" required name="curso" id="curso"/>
    <br />
    <?php 
    echo "<input type='hidden' name='user' id='user' value='".$_SESSION['username']."'>"
    ?>
    
    <input type="submit" name="Entrar" id="Entrar" />
  </form>
  </footer>

</body>
</html>