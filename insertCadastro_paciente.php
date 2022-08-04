<?php
include "conectaBanco.php"; 
// obtem os valores digitados
$nm_paciente = $_POST["nome"];
$nm_email = $_POST["email"];
$senha = $_POST["senha"];
$cd_cpf = $_POST["cpf"];
$dt_nascimento = $_POST["dt_nascimento"];
$dt_nascimentoFormat = date('d/m/Y', strtotime($dt_nascimento));

session_start();

$_SESSION['nome'] = $nm_paciente;
$_SESSION['email'] = $nm_email;
$_SESSION['senha'] = $senha;
$_SESSION['cpf'] = $cd_cpf;
$_SESSION['dt_nascimento'] = $dt_nascimentoFormat;


$res = $con->query("INSERT INTO tb_paciente (nm_paciente,nm_email,senha,cd_cpf,dt_nascimento) 
					VALUES 
					('$nm_paciente',
					'$nm_email',
					'$senha', 
					'$cd_cpf',
					'$dt_nascimento')");
    
 echo "<script> alert('Cadastrado realizado com sucesso!');window.location.href = 'pacientetriagem.php'</script>";

$con->close();
?>