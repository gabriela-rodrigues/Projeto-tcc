<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/pacientepsicologo.css">
    <link rel="stylesheet" href="css/stylemenudentro.css">   
    <script src="https://kit.fontawesome.com/c0fe397e5b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
<script src="js/agendamento.js"></script>
<title>Resilience Mind | Terapia Online</title>
 
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
                        <div class="profile-name">Usuário</div>
                    </div>
</div>
<br>
<li>
 <a href="indexpaciented.php"><i class="fa fa-home "></i><span class="nav-text">INICIO</span></a>
 </li>
 <li class="has-subnav"><a href="perfilpaciente.php"><i class="fa fa-user-circle "></i><span class="nav-text">MEU PERFIL</span></a>
</li>
<li class="has-subnav"><a href="pacienteagendamento.php"><i class="fa fa-list "></i><span class="nav-text">MINHAS CONSULTAS</span></a>
</li>
<li class="has-subnav"><a href="pacienteagendar.php"><i class="fa fa-table"></i><span class="nav-text">AGENDAR</span></a>
</li>
<li><a href="pacientepsicologo.php"><i class="fa fa-search"></i><span class="nav-text">PSICÓLOGOS</span></a>
</li>
<li><a href="planospaciente.php"><i class="fa fa-file-invoice-dollar"></i><span class="nav-text">PLANOS</span></a>
</li>
<li class="has-subnav"><a href="chat_dentro.php"><i class="fa fa-comment"></i><span class="nav-text">CHAT</span></a>
</li>
</li>
</ul>
<ul class="logout">
<li><a href="login_pac.php"> <i class="fa fa-power-off fa-2x"></i><span class="nav-text">SAIR</span></a>
</li>  
</ul>
</nav>
        </header>
<body>
    <hr>
    <div class="titulo">Psicólogos</div>
    <hr>
    <div class="container">
<table id="example" class="display" style="width:100%" margin="5">
        <thead>
            <tr>
            <th>Psicólogo</th>
                <th>CRP</th>
                <th>Vertente</th>
                <th>Agendar</th>
                <th>Ver</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>JULIARA THIAGO LUCAS</td>
                <td>06/133562</td>
                <td>Psicanálise</td>
                <td><a href="pacienteagendar.php"><i class="fas fa-calendar-week" aria-hidden="true"></i></td>
                <td><a href="biopsicologo.php"><i class="fas fa-clipboard" aria-hidden="true"></i></td>
            </tr>
            <tr>
            <td>RAFAEL CHIMENTI PETRILLI</td>
                <td>06/118863</td>
                <td>Behaviorismo</td>
                <td><a href="pacienteagendar.php"><i class="fas fa-calendar-week" aria-hidden="true"></i></td>
                <td><a href="biopsicologo.php"><i class="fas fa-clipboard" aria-hidden="true"></i></td>
            </tr>
        </tbody>
     
</table>
<br><br>      
 </div>
</body>
</html>
