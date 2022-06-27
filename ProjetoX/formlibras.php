<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- botao de fechar -->
	<div class="alert"> 
        <span class="closebtn" onClick="window.frameElement.parentElement.style.display='none';">&times;</span>
    </div>
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