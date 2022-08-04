<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Resilience Mind | Psicoterapia Online</title>
  <meta charset="utf-8">
 <link rel="stylesheet" type="text/css" href="css/cadastro.css">
 <link rel="stylesheet" type="text/css" href="css/stylemenufora.css">
	<link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <script href="js/cadastro1.js"></script>
  <script href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</head>
<body>
	<!-- inicial & Nav -->
	<div id="inicial">
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
<body>
<div id="inicial">
	  <header>
    <div class="topnav" id="myTopnav">
<a href=""><img src="img/dash1.jpg" class="active" id="logotipo"></a>
<a href="indexpaciente.php">Sou Paciente</a>
<a href="indexpsicologo.php">Sou Psicologo</a>
<a href="login_psi.php">Login</a>
<a href="javascript:void(0);" class="icon" onclick="myFunction()">
  <i class="fa fa-bars"></i>
</a>
</div>

	  </header>
<div class="container">  
  <form id="contact" action="insertCadastro_psicologo.php" method="POST">
    <h3>Registre-se | Psicólogo</h3>
    <h4>Insira os dados de acesso abaixo.</h4>
    <fieldset>
          <label>Nome Completo: </label>
      <input placeholder="Nome" name="nome" type="text" tabindex="1" maxlength="100" required autofocus>
    </fieldset>
    <fieldset>
          <label>Email: </label>
      <input placeholder="Ex: meuemail@email.com" name="email" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
          <label>Senha: </label>
      <input placeholder="Sua senha.." name="senha" type="password" tabindex="4" required>
    </fieldset>
    <fieldset>
    <fieldset>
          <label> CPF: </label>
      <input placeholder="Ex: 000.000.000-00" name="cpf" type="text" tabindex="1" maxlength="100" required autofocus>
    </fieldset>
    <fieldset>
          <label>Data de nascimento: </label>
      <input placeholder="Ex: 00/00/0000" name="dtnascimento" type="date" tabindex="1" maxlength="100" min="1919-12-30" max="2001-11-26" required autofocus>
    </fieldset>
    <fieldset>
    <label>Envie sua foto: </label>
    <input name="foto" type="file" requirwd>
    <br>
    <br>
    <fieldset>
          <label> CRP: </label>
      <input placeholder="Ex: 00/000000" name="crp" type="text" tabindex="1" maxlength="100" required autofocus>
    </fieldset>
    <fieldset>
          <label>Data de Formação: </label>
      <input placeholder="Ex: 00/00/0000" name="dtformacao" type="date" tabindex="1" maxlength="100" min="1919-12-30" max="2001-11-26" required autofocus>
    </fieldset>
    <fieldset>
          <label>Descrição da Formação: </label>
      <textarea placeholder="Ex: Faculdade Anhembi..." name="dsformacao" type="date" tabindex="1" maxlength="100" min="1919-12-30" max="2001-11-26" required autofocus></textarea>
    </fieldset>
    <fieldset>
          <label>Descrição do Psicólogo: </label>
      <textarea placeholder="Ex: Descreva como você costuma trabalhar, fale da sua vertente..." name="dspsicologo" type="date" tabindex="1" maxlength="100" min="1919-12-30" max="2001-11-26" required autofocus></textarea>
    </fieldset>
    <!--<fieldset>
    <label>Descrição do Psicólogo: </label>
    <select multiple>
  <option value="" disabled selected>Choose your option</option>
  <option value="1">Psicanálise</option>
  <option value="2">Psicologia Analítica de Jung</option>
  <option value="3">Behaviorismo</option>
  <option value="4">Humanismo</option>
  <option value="5">Psicoterapia Corporal – Reich</option>
  <option value="6">Terapia Cognitivo-Comportamental</option>
  <option value="7">Transpessoal</option>
  <option value="8">Mindfulness Psychology</option>
</select>
</fieldset>-->
<button type="submit">Próximo</button>
  </form>
</div>
</body>
</html>