<!DOCTYPE html>
<html>
<head>
  <title >>C.E.E</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
  <header header class="o-header">
    <a href="../index.php">
    <center><h1 class="topo"><img href="../IMAGENS/logo.png" height="50"/> >C.E.E </h1></center>
   </a>
  </header>
  
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
    <input type="radio" value="adm" name="categoria" id="adm" required/>
      <label for="adm">Administrador</label><br/>
      <input type="radio" value="basic" name="categoria" id="basic"/>
      <label for="basic">Básico</label><br/>
    <input type="submit" name="Entrar" id="Entrar" />
  </form>
  </footer>

</body>
</html>