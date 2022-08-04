<?php
include "conectaBanco.php"; 
// obtem os valores digitados
$nm_paciente = $_POST["nome"];
$dt_anamnese = $_POST["dt_anamnese"];
$ds_queixaprincipal = $_POST["ds_queixaprincipal"];
$ds_evoulucaoqueixa = $_POST["ds_evolucaoqueixa"];
$ds_sintomas = $_POST["ds_sintomas"];

session_start();

$_SESSION['nome'] = $nm_paciente;
$_SESSION['dt_anamnese'] = $dt_anamnese;
$_SESSION['ds_queixaprincipal'] = $ds_queixaprincipal;
$_SESSION['ds_evolucaoqueixa'] = $ds_evoulucaoqueixa;
$_SESSION['dt_sintomas'] = $ds_sintomas;


$res = $con->query("INSERT INTO tb_anamnese (nm_paciente,dt_anamnese,ds_queixaprincipal,ds_evolucaoqueixa,ds_sintomas) 
					VALUES 
					('$nm_paciente',
					'$dt_anamnese',
					'$ds_queixaprincipal', 
					'$ds_evoulucaoqueixa',
					'$ds_sintomas')");
    
 echo "<script> alert('Anamnese cadastrada com sucesso!');window.location.href = 'indexpsicologod.php'</script>";

$con->close();
?>