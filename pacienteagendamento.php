<!doctype html>
<html lang="en" data-framework="javascript">

<head>
    <meta charset="utf-8">
    <title>Resilience Mind | Terapia Online</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/stylemenudentro.css">   
    <link rel="stylesheet" href="css/agendamentopaciente.css">  


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
<li><a href="pacientepsicologo"><i class="fa fa-search"></i><span class="nav-text">PSICÓLOGOS</span></a>
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
    <div class="titulo">Consultas Agendadas</div>
    <hr>
    <div class="container">
            <div class="col offset-md-1-agendamentos">
                <div class="row-agendamento">
                    <div class="col-agendamentos">
                    <div class="col form-group-agendamentos">
                        <button type="button" class="btn btn-danger btn-block" id="btn_clear_storage" onclick="clear_storage()">Limpar Agendamentos</button>
                    </div>
                </div>
                <table class="table table-bordered table-hover table-striped table-sm" id="appointment_list">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="text-center align-middle">Data</th>
                            <th scope="col" class="text-center align-middle">Nome de Paciente</th>
                            <th scope="col" class="text-center align-middle">Horário</th>
                            <th scope="col" class="text-center align-middle">Nome do Psicólogo</th>
                            <th scope="col" class="text-center align-middle">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
    <script src="js/agendar.js"></script>
</body>
</html>