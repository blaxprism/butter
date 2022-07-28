<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Projeto ED</title>

<style type="text/css">
    /* slides */
.content{
  display: flex;
  flex-direction: center;
  justify-content: center;
  align-items: center;
}

#slides{
  width: 80%;
  max-width: 500px;
  height: 37vw;
  max-height: 100%;
  top: 0px;
  position: relative;
}

#slides img{
  opacity: 0;
  position: absolute;

  width: 100%;
  height: 100%;

  object-fit: cover;

  transition: opacity 800ms;
  background: #d1e8f0;
}

#slides img.selected{
  opacity: 1;

}

</style>

  </head>
  <body bgcolor="#d1e8f0">
    <!-- Botao fechar -->
    <div class="alert">
        <span class="closebtn" onClick="window.frameElement.parentElement.style.display='none';">&times;</span>
    </div>
    
  <?php
        $texto = strtolower($_POST["textotraduzir"]);// pegar o input
        $separado = str_split($texto);//soletrar em array
          
        //loop pra salvar as imagens num array
        for ($i=0; $separado[$i] != "" ; $i++) {      

          if ($separado[$i] == " " ||$separado[$i] == "," ) {

            $imagens[$i] = "<img src='../lib/branco.png' alt='tradução' height='100%' width='50%'>";
            
          }else{

            $img = "../lib/".$separado[$i].".png";//caminho
                //pegar do dicionario
                $imagens[$i] = "<img src='$img' alt='tradução' height='100%' width='50%'>";
                
          }
        }

    ?>

      
      <div class="content">

        <div id="slides">

          

          <?php

            //adicionar as imagens

            $img = "../lib/".$separado[0].".png";//caminho
            $imagens[0] = "<img class='selected' src='$img' alt='tradução' height='100%' width='50%'>";

            $x = 0;
            do {
              echo $imagens[$x];
              $x ++;
              ?>

              <?php

            }while ( $imagens[$x]);
          
          ?>


        </div>

        <script >
  
          let time = 2000,//tempo pra alterar a imagem
            currentImageIndex = 0,//contagem
            images = document
                        .querySelectorAll("#slides img")//pegar as imagens
            max = images.length;

        //função pra trocar de imagem
        function nextImage() {

            currentImageIndex++

            if(currentImageIndex >= max)
                currentImageIndex = 0

            images[currentImageIndex]
                .classList.add("selected")
        }

        //função pra chamar a troca
        function start() {
            setInterval(() => {
                nextImage()
            }, time)
        }

        window.addEventListener("load", start)//start quando a janela estiver carregada
      </script>
      
      </div>

  <br><br><br><br>
  <!-- input do texto -->
  <div class="formlibras">
    <form action="libras.php" method="POST" >
        <input type="text" name="textotraduzir" id="textotraduzir" placeholder="Texto para traduzir" required="required" />
        <input type="submit" name="traduzir" value="traduzir">
      </form>
  </div>

  </body>
</html>