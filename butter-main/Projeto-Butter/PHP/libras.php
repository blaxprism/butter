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
        $texto = strtolower($_POST["textotraduzir"]);// pegar o input
        $separado = str_split($texto);//soletrar em array
          
        //loop pra exibir a tradução
        for ($i=0; $separado[$i] != "" ; $i++) {           
          if ($separado[$i] == " " ||$separado[$i] == "," ) {
            echo "<img src='../lib/branco.png' alt='tradução' height='100%' width='50%'>";
            
          }else{
          $img = "../lib/".$separado[$i].".png";//caminho
              //pegar do dicionario
              echo "<img src='$img' alt='tradução' height='100%' width='50%'>";
              
          }
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
