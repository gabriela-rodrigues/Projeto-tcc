<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/planos.css">
    <link rel="stylesheet" href="css/planoindex.css">
    <link rel="stylesheet" href="css/stylemenudentro.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
    <script src="js/behavior.js"></script>
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
<li><a href=""><i class="fa fa-file-invoice-dollar"></i><span class="nav-text">PLANOS</span></a>
<li class="has-subnav"><a href="chat_dentro.php"><i class="fa fa-comment"></i><span class="nav-text">CHAT</span></a>
</li>
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
    <div class="titulo">Planos</div>
    <hr>
    <div id="container">
        
        <input type="radio" id="radio-1" name="plano" value="plano-1">  
        <div class="card">
            <label for="radio-1">
            <div class="top-card" >SEMANAL</div>
            <br><br><br><br>
            <ul class="caracteristica-plano">
        <li class="caracteristicas-plano">2 sessões por semana </li>
        <br>
        <li class="caracteristicas-plano">Uso ilimitado de mensagens de texto, áudio, imagem e vídeo </li>
        <br>
        <li class="caracteristicas-plano">Válido por 1 semana <br>(segunda a sexta) </li>
        <br>
        <p class="preço-total">Total: R$ 80,00 
            <button id="btn-1" onclick="mostrarTela('tela1')" href="#">Selecionar</button>
        </div>
        </label>
        <input type="radio" id="radio-2" name="plano" value="plano-2">
        <div class="card">
            <label for="radio-2">
            <div class="top-card" font-align="center" >MENSAL</div>
            <br><br><br><br>
            <ul class="caracteristica-plano">
        <li class="caracteristicas-plano">8 sessões por mês </li>
        <br>
        <li class="caracteristicas-plano">Uso ilimitado de mensagens de texto, áudio, imagem e vídeo</li>
        <br>
        <li class="caracteristicas-plano">Válido por 30 dias <br>(segunda a sexta) </li>
<br>
        <p class="preço-total">Total: R$ 210,00 
            <button id="btn-2" onclick="mostrarTela('tela2')">Selecionar</button>
        </div>
        </label>
        <input type="radio" id="radio-3" name="plano" value="plano-3">
        
        <div class="card">
                <label for="radio-3">
            <div class="top-card" font-align="center">ANUAL</div>
            <br>
            <ul class="caracteristica-plano">
        <li class="caracteristicas-plano">96 sessões por ano </li>
        <br>
		<li class="caracteristicas-plano">Uso ilimitado de mensagens de texto, áudio, imagem e vídeo </li>
		<br>
		<li class="caracteristicas-plano">5% off</li>
        <br>
        <li class="caracteristicas-plano">Válido por 12 meses <br>(segunda a sexta)</li>
        <br>
		<p class="preço-total">Total ao ano: R$ 2500,00 
            <button id="btn-3" onclick="mostrarTela('tela3')">Selecionar</button>
        </div>
        </label>
    </div>
    

    <div id="tela1" name="tela">
        <div class="top-tela"><strong>AVISO!</strong></div><!--strong pra por em negrito-->
        <div class="btn-container"><!--achei que fosse melhor deixar eles num container para possicionar-->
           <div class="textoconf">Está prestes a adquirir o plano semanal, deseja prosseguir?</div>
           <br>
           <div class="planoconf">Total: R$ 80,00 </div>
        <button id="btn-cancel-1" onclick="fecharTela('tela1')">Cancelar</button>
            <button id="btn-confirm-1" onclick="location.href='http://www.mercadopago.com.br/checkout/v1/redirect?pref_id=454715216-fb7e2d5e-6984-4c69-8853-0e44526d1c33'">Confirmar</button>
        </div>
    </div>

    <div id="tela2" name="tela">
        <div class="top-tela"><strong>AVISO!</strong></div><!--strong pra por em negrito-->
        <div class="btn-container"><!--achei que fosse melhor deixar eles num container para possicionar-->
        <div class="textoconf">Está prestes a adquirir o plano mensal, deseja prosseguir?</div>
           <br>
           <div class="planoconf">Total: R$ 210,00 </div>   
        <button id="btn-cancel-2" onclick="fecharTela('tela2')">Cancelar</button>
            <button id="btn-confirm-2" onclick="location.href='https://www.mercadopago.com.br/checkout/v1/redirect?pref_id=454715216-fad3ebc5-34d1-4168-9dbe-facea0c50ff0'">Confirmar</button>
        </div>
    </div>
    <div id="tela3" name="tela">
        <div class="top-tela"><strong>AVISO!</strong></div><!--strong pra por em negrito-->
        <div class="btn-container"><!--achei que fosse melhor deixar eles num container para possicionar-->
        <div class="textoconf">Está prestes a adquirir o plano anual, deseja prosseguir?</div>
           <br>
           <div class="planoconf">Total: R$ 2500,00 </div>    
        <button id="btn-cancel-3" onclick="fecharTela('tela3')">Cancelar</button>
            <button id="btn-confirm-3" onclick="location.href='https://www.mercadopago.com.br/checkout/v1/redirect?pref_id=454715216-b9ae6e7d-a31f-47cd-8fb7-87c8b925e572'">Confirmar</button>
        </div>
    </div>

<script src="behavior.js"></script>
</body>
</html>