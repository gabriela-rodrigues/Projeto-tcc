<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="css/perfilpsicologo.css">
<link rel="stylesheet" href="css/stylemenudentro.css">   
<link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
     <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
<title>Resilience Mind | Terapia Online</title>
</head>
<body>
    
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
<li>
 <a href="indexpsicologod.php"><i class="fa fa-home "></i><span class="nav-text">INICIO</span></a>
 </li>
 <li class="has-subnav"><a href="perfilpsicologo.php"><i class="fa fa-laptop "></i><span class="nav-text">MEU PERFIL</span></a>
</li>
<li class="has-subnav"><a href="psicologoagendados.php"><i class="fa fa-list "></i><span class="nav-text">MINHAS CONSULTAS</span></a>
</li>
<li class="has-subnav"><a href="psicologoanamnese.php"><i class="fa fa-table "></i><span class="nav-text">ANAMNESES</span></a>
</li>
<li><a href="planospsicologo.php"><i class="fa fa-file-invoice-dollar"></i><span class="nav-text">PLANOS</span></a>
</li>
<li class="has-subnav"><a href="chat_dentro.php"><i class="fa fa-comment"></i><span class="nav-text">CHAT</span></a>
</li>
</ul>
<ul class="logout">
<li><a href="login_psi.php"> <i class="fa fa-power-off "></i><span class="nav-text">SAIR</span></a>
</li>  
</ul>
</nav>
        </header>


    <body>
    <div class="col-md-12"></div>
    <hr>
    <div class="titulo">Meu Perfil</div>
    <hr>

    <div class="container">
    <div class="op3">
    <h5>Foto de Perfil:</h5>
    <input type="file"  class="form-control" name="myFile">
    <h5>Nome: </h5>
<input type="nome" class="form-control" id="exampleFormControlInput1" readonly>
<!--<input type="text" id="myText" value="">-->
<h5>Data de Nascimento: </h5>
<input type="nome" class="form-control" id="exampleFormControlInput1" readonly>
<h5>E-mail: </h5>
<input type="nome" class="form-control" id="exampleFormControlInput1" readonly>
<!--<input type="text" id="myText" value="">-->
</div>
<div class="op5">
<!--<input type="text" id="myText" value="">-->
<h5>CPF: </h5>
<input type="nome" class="form-control" id="exampleFormControlInput1" readonly>
<h5>Telefone: </h5>
<input type="nome" class="form-control" id="exampleFormControlInput1">
<!--<input type="text" id="myText" value=""></div>-->
<h5>Gênero: </h5>
<input type="nome" class="form-control" id="exampleFormControlInput1" readonly>
<h5>Senha: </h5>
<input type="nome" class="form-control" id="exampleFormControlInput1" readonly>
</div>
<br><br>
<hr>
<div class="titulo">Dados Profissionais</div>
<hr>
<div class="op3">
<h5>Número de inscrição no CRP: </h5>
<input type="nome" class="form-control" id="exampleFormControlInput1">
<h5>Data de Formação: </h5>
<input type="nome" class="form-control" id="exampleFormControlInput1" readonly>
<h5>Descrição do Psicólogo: </h5>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="op4">
<h5>Carteira CRP: </h5>
<input type="file" class="form-control" name="myFile">
<h5>Abordagem da Psicologia: </h5>
    <select class="form-control-1">
      <option>Psicanálise</option>
      <option>Humanista</option>
      <option>Behaviorismo</option>
      <option>Terapia Cognitivo Comportamental</option>
      <option>Gestalt-terapia</option>
      <option>Reich</option>
    </select>
<h5>Descrição da Formação: </h5>
    <textarea class="form-control" id="exampleFormControlTextarea1" maxlenght="100"  rows="3"></textarea>
</div>

</div>
<div class="clearfix"></div>

<button>Salvar</button>
</div>
</div>
</body>
</html>