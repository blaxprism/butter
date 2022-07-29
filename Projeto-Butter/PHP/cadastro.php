<!DOCTYPE html>
<html>
<head>
  <title>Projeto ED</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
  <?php
    // começar ou retomar uma sessão
    session_start();
    //se estiver logado
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
  
  <footer class="o-footer">
  <form action="cadastrot.php" method="POST">
    <label for="email">E-mail: </label><br/>
    <input type="email" name="email" id="email"/>
    <br />
    <label for="nome">Nome: </label><br/>
    <input type="text" required="required" name="nome" id="nome"/>
    <br/>
    <label for="login">Login: </label><br/>
    <input type="text" required="required" name="login" id="login"/>
    <br/>
    <label for="senha">Senha: </label><br/>
    <input type="password" required="required" name="senha" id="senha" />
    <br />
    <input type="radio" value="2" name="nivel" id="adm" required/>
    <label for="adm">Administrador</label><br/>
    <input type="radio" value="0" name="nivel" id="aluno"/>
    <label for="aluno">aluno</label><br/>
    <input type="submit" name="Entrar" id="Entrar" />
  </form>
  </footer>

</body>
</html>