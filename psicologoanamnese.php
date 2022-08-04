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
<link rel="stylesheet" type="text/css" href="css/psicologoanamnese.css">

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
    <div class="col-md-12"></div>
    <hr>
    <div class="titulo">Anamnese Psicológica</div>
    <hr>
    <div class="container">
<form action="insertAnanmnese.php" method="POST">
    <div class="op3"><h5>Nome do Paciente: </h5>
    <input type="nome" nome="nm_paciente" class="form-control" id="exampleFormControlInput1">
    <!--<input type="text" id="myText" value="">-->
<h5>Data da Anamnese:</h5>
<input type="date" nome="dt_anamnese" class="form-control" id="exampleFormControlInput1">
<!--<input type="text" id="myText" value="">-->
<h5>Descrição da Queixa:</h5>
<textarea class="form-control" nome="ds_queixaprincipal" id="exampleFormControlTextarea1" rows="3"></textarea>
<!--<input type="text" id="myText" value="">-->
<h5>Descrição da Evolução da Queixa: </h5>
<textarea class="form-control" nome="ds_evolucaoqueixa" id="exampleFormControlTextarea1" rows="3"></textarea>
<!--<input type="text" id="myText" value="">-->
<h5>Descrição dos Sintomas:</h5>
    <textarea class="form-control" nome="ds_sintomas" id="exampleFormControlTextarea1" rows="3"></textarea>
<!--<input type="text" id="myText" value=""></div>-->
<button type="submit">Salvar</button>
</form>
</div>
</div>
</body>
</html>