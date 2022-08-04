<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
	crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styleindex.css">
    <link rel="stylesheet" type="text/css" href="css/loginindex.css">
    <link rel="stylesheet" type="text/css" href="css/stylemenufora.css">
	<script src="js/indexjs.js"></script>
	<title>Resilience Mind | Terapia Online</title>
</head>
<body>
<header>
		<div class="wrapper">
      <div class="container-fluid full-image">
      </div>
      <div class="container-fluid nav-color">
        <!-- NAVIGATION START -->
        <nav class="main-navigation ">
          <div class="row ">
            <div class="col-xs-6-logo ">
              <img src="img/dash1.jpg"></div>
            <div class="col-xs-6">
              <div class="mobile-menu-icon"><i class="fa fa-bars" aria-hidden="true"></i></div>
              <div class="menu">
                <ul class="main-menu">
				<li><a class="menu-button" href="indexpaciente.php">Sou Paciente</a></li>
                  <li><a class="menu-button" href="indexpsicologo.php">Sou Psicologo</a></li>
                  <li><a class="menu-button" href="login_psi.php">Login</a></li>
                  <li><a class="menu-button" href="cadastroPsi_1.php">Registre-se</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xs-12">
            <div class="responsive-menu"></div>
          </div>
        </nav>
      </div>
    </div>
	  </header>
</div>
<div id="login-page">
  <div class="login">
    <img src="img/LOGOTIPO.png" alt="COLOCAR O LOGO" class="logo">
    <h2 class="login-title">Ola psicologo!</h2>
    <form class="form-login" method="POST" action="conectaLogin_psicologo.php">
      <label for="email">E-mail</label>
      <div class="input-email">
        <i class="fas fa-envelope icon"></i>
        <input type="email" name="email">
      </div>
      <label for="password">Senha:</label>
      <div class="input-password">
        <i class="fas fa-lock icon"></i>
        <input type="password" name="senha">
      </div>
      <a href="#" class="lead2" style="left:10px;">Esqueceu a senha?</a>
      <input type="submit" value="Login">
    </form>

  </div>
  <div class="background">
    <h1>RESILIENCE</h1>
    <h1>MIND</h1>
    <br>
    <p>O ponto de partida que você precisava.</p>

  </div>
</div>
</body>
</html>