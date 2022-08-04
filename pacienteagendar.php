<!doctype html>
<html lang="en" data-framework="javascript">

<head>
    <meta charset="utf-8">
    <title>Resilience Mind | Terapia Online</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/agendarpaciente.css">    
    
    <link rel="stylesheet" href="css/stylemenudentropaciente.css"> 
 
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
    <div class="titulo">Agendar Consulta</div>
    <hr>
    <div class="container">
<!--calendario-->
        <div class="row">
            <div class="calendar col-md-8 offset-md-2">
                <div>
                    <div class="card-header bg-primary">
                        <ul>
                            <li id="month" class="text-white text-uppercase text-center">
                            </li>
                            <li id="year" class="text-white text-uppercase text-center">
                            </li>
                        </ul>
                    </div>
                    <table class="table calendar table-bordered table-responsive-sm" id="calendar">
                        <thead>
                            <tr class="weekdays bg-dark">
                              <th scope="col" class="text-white text-center">Seg</th>
                              <th scope="col" class="text-white text-center">Ter</th>
                              <th scope="col" class="text-white text-center">Qua</th>
                              <th scope="col" class="text-white text-center">Qui</th>
                              <th scope="col" class="text-white text-center">Sex</th>
                              <th scope="col" class="text-white text-center">Sab</th>
                              <th scope="col" class="text-white text-center">Dom</th>
                            </tr>
                          </thead>
                        <tbody class="days bg-light" id="days"></tbody>
                        <tfoot></tfoot>
                    </table>
                </div>
            </div>
<!--fim calendario-->
        <br>
            <div class="col offset-md-1">
                <form id="form_create_appointment">
                    <div class="op">
 
                        <h5>Nome do Paciente</h5>
                            <input class="form-control-2" type="text" id="description" required>
                            <h5 class="required">Nome do Psicólogo</h5>
                            <input class="form-control-2" type="text" id="end_time" required>
   
                        <h5 class="required">Data</h5>
                            <input class="form-control-2 date-input" type="text" id="date" data-trigger="hover" data-toggle="popover" title="Date" data-content="Para escolher uma data a partir de hoje, clique nela no calendário." required>
                        <h5 class="required">Horário</h5>
                            <input class="form-control-2 time-input" type="text" id="start_time" required>
                            <br>
                            <button type="button" class="btn btn-warning btn-block" id="clear" onclick="clear_input()">Limpar Formulário</button>
                            <button type="button" class="btn btn-primary btn-block" id="submit" onclick="make_appointment()" disabled="disabled">Marcar Consulta</button>
                        </div>
                </form>
            </div>
            </div>
            </div>
</div><br><br>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
    <script src="js/agendar.js"></script>
</body>
</html>