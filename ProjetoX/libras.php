<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title></title>
     
  </head>
  <body>
    <!-- Botao fechar -->
    <div class="alert">
        <span class="closebtn" onClick="window.frameElement.parentElement.style.display='none';">&times;</span>
    </div>
    
  <?php
        $texto = $_POST["textotraduzir"];
        $separado = explode(" ",$texto);
        echo  "<script>alert('Email enviado com Sucesso!);</script>";
          
        //ultimo array end($separado)
        for ($i=0; $separado[$i] != "" ; $i++) { 
          //caminho
          $img = "dicionario/".$separado[$i].".png";
          //pegar do dicionario
          echo "<img src='$img' alt='tradução' height='100%' width='50%'>";
          echo "<br>";
        }

    ?>
  <br><br><br><br><br>
  <!-- input do texto -->
  <div class="formlibras">
    <form action="libras.php" method="POST" >
        <input type="text" name="textotraduzir" id="textotraduzir" placeholder="Texto para traduzir" required="required" />
        <input type="submit" name="traduzir" value="traduzir">
      </form>
  </div>

  </body>
</html>