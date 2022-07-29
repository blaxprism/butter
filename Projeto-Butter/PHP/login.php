<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title >Nome do site</title>
    <link rel="stylesheet" href="../css/estilos.css">
  </head>
  <body>
    <?php
      // começar ou retomar uma sessão
      session_start();
      if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
      header('location: ../index.php');
      //se tiver tentado fazer login e dado um erro
      }elseif(isset($_SESSION['falha']) && $_SESSION['falha'] == true){
      //se não tiver tentado fazer o login
      }else{
      }
    ?>
    <?php
      include("headero.php");
    ?>
    
    <footer footer class="o-footer">
    <form action="logint.php" method="POST">
      <label for="login">Login: </label><br/>
      <input type="text" required="required" name="login" id="login"/>
      <br/>
      <label for="senha">Senha: </label><br/>
      <input type="password" required="required" name="senha" id="senha" />
      <br />
      <input type="submit" name="Entrar" id="entrar"/>
    </form>
    </footer>

  </body>
</html>