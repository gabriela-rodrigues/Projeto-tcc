<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/agendamentopsicologo.css">
    <link rel="stylesheet" href="css/stylemenudentro.css">   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
<script src="js/agendamento.js"></script>
<title>Resilience Mind | Psicoterapia Online</title>
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
<br>
<li>
 <a href="indexpsicologod.php"><i class="fa fa-home"></i><span class="nav-text">INICIO</span></a>
 </li>
 <li class="has-subnav"><a href="perfilpsicologo.php"><i class="fa fa-laptop"></i><span class="nav-text">MEU PERFIL</span></a>
</li>
<li class="has-subnav"><a href="psicologoagendados.php"><i class="fa fa-list"></i><span class="nav-text">MINHAS CONSULTAS</span></a>
</li>
<li class="has-subnav"><a href="psicologoanamnese.php"><i class="fa fa-table"></i><span class="nav-text">ANAMNESES</span></a>
</li>
</li>
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
    <div class="titulo">Meus Pacientes</div>
    <hr>
    <div class="container">
<table id="example" class="display" style="width:100%" margin="5">
        <thead>
            <tr>
                <th>Paciente</th>
                <th>Data</th>
                <th>Horário</th>
                <th>Anamnese</th>
                <th>Cancelar</th>
                <th>Atender</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Ana Carolina</td>
                <td>28/11/19</td>
                <td>11:15</td>
                <td><a href="psicologoanamnese.php"><i class="fas fa-paste" aria-hidden="true"></i></td>
                <td><a href="#"><i class="fas fa-user-minus" aria-hidden="true"></i></td>
                <td><a href="#"><i class="fas fa-comments" aria-hidden="true"></i></td>
            </tr>
            <tr>
                <td>Gabriela</td>
                <td>27/11/19</td>
                <td>15:10</td>
                <td><a href="psicologoanamnese.php"><i class="fas fa-paste" aria-hidden="true"></i></td>
                <td><a href="#"><i class="fas fa-user-minus" aria-hidden="true"></i></td>
                <td><a href="#"><i class="fas fa-comments" aria-hidden="true"></i></td>
            </tr>
        </tbody>
</table>
<br><br>

         
 </div>

</body>
</html>
