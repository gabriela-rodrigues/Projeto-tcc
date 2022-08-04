<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Resilience Mind | Terapia Online</title>
	<script type="text/javascript">
		function ajax(){
			var req = new XMLHttpRequest();
			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
						document.getElementById('chat').innerHTML = req.responseText;
				}
			}
			req.open('GET', 'chat.php', true);
			req.send();
		}
	
		setInterval(function(){ajax();}, 1000);

 
	</script>
	<style type="text/css">
		.borda
		{
			border-style: solid;
    		border-color: darkmagenta;
			background: antiquewhite;
    		width: 50%;
    		padding: 5px;
   			position: relative;
			font-size: 15px;
    		left: 17px;
    		top: 62px;
		}
		input[type="text"]
		{
		font-size: 17px;
    	margin: 5px;
		}
		input[type="submit"]
		{
		font-size: 16px;
    	margin: 5px;
		}
	</style>
</head>
	<?php
		include("conectaBanco.php");
		$nome = $_POST['nome'];
		echo "<br>";
		$timestamp = strtotime(date("H:i:s")) - 3600;
		$data_hora = strftime('%Y-%m-%d %H:%M:%S, $timestamp');
		$mensagem = $_POST['mensagem'];
		$sql = $con->query("INSERT INTO chat1 SET nome= '$nome', mensagem= '$mensagem', data_hora='$timestamp' ");
	?>
<div class="borda">
<div id="inicial">
	  <header>
<body onload="ajax();">
<p><label>"Quando fazemos tudo o que é possivel, o impossivel tem chance de acontecer"</label></p>
<br>
	<div id="chat">
	</div>
	<br>
		<form method="post" action="chatFuncional.php">
		<input type="text" name="nome" placeholder="Insere o seu nome: ">
		<input type="text" name="mensagem" placeholder="mensagem">
		<input type="submit" value="Enviar">
	</form>
</div>
</body>
</html>