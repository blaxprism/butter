<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title >Nome do site</title>
  <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
  <header class="o-header">
    <a href="../index.php">
    <center><h1 class="topo"><img href="../IMAGENS/logo.png" height="50"/> C.E.E </h1></center>
   </a>
  </header>
  
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