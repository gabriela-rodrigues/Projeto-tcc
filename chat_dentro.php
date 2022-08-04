<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Resilience Mind | Terapia Online</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/stylemenudentro.css">   
<link rel="stylesheet" type="text/css" href="css/indexpsicologod.css">

<!--	<script src="js/initial.js"></script>-->
</head>
<header>
<nav class="main-menu">
</div>

<div class="area"></div><nav class="main-menu">
 <ul>
 <li>
 <img src="img/logo.png" class="logotipo">
 <div class="logo-text">
                        <div class="logo-name">RESILIENCE </div>
                        <div class="logo-name1">MIND</div>
                    </div>
 </li>
 <hr>
 <div class="profile-sidebar">

                    <!-- User picture -->
                    <div class="profile-userpic">
                        <img src="img/user.png" class="img-responsive img-circle border" alt="foto">
                    </div>

                    <!-- Sidebar title -->
                    <div class="profile-user">
                        <div class="profile-name">Psicólogo</div>
                    </div>
</div>
<br>
<br>
<li>
 <a href="indexpsicologod.php"><i class="fa fa-home"></i><span class="nav-text">INICIO</span></a>
 </li>
 <li class="has-subnav"><a href="perfilpsicologo.php"><i class="fa fa-user-circle"></i><span class="nav-text">MEU PERFIL</span></a>
</li>
<li class="has-subnav"><a href="psicologoagendados.php"><i class="fa fa-list"></i><span class="nav-text">MINHAS CONSULTAS</span></a>
</li>
<li class="has-subnav"><a href="psicologoanamnese.php"><i class="fa fa-table"></i><span class="nav-text">ANAMNESES</span></a>
</li>
<li><a href="planospsicologo.php"><i class="fa fa-file-invoice-dollar"></i><span class="nav-text">PLANOS</span></a>
</li>
<li class="has-subnav"><a href="chat_dentro.php"><i class="fa fa-comment"></i><span class="nav-text">CHAT</span></a>
</li>
</ul>
<ul class="logout">
<li><a href="login_psi.php"> <i class="fa fa-power-off"></i><span class="nav-text">SAIR</span></a>
</li>  
</ul>
</nav>
        </header>
<body>
    <hr>
    <div class="titulo">Bem-vindo</div>
    <hr>
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
    		border-color: #8159de;
			background: white;
    		width: 50%;
    		padding: 5px;
   			position: relative;
			font-size: 15px;
    		left: 406px;
    		top: -16px;
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
	<div id="chat">''
	</div>
	<br>
		<form method="post" action="chat_dentro.php">
		<input type="text" name="nome" placeholder="Insere o seu nome: ">
		<input type="text" name="mensagem" placeholder="mensagem">
		<input type="submit" value="Enviar">
	</form>
</div>
</body>
</html>
</body>
</html>