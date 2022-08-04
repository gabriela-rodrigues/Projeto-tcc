<?php
include "conectaBanco.php"; 
// obtem os valores digitados
$nm_psicologo = $_POST["psicologo"];
$nm_paciente = $_POST["paciente"];
$dt_agendamento = $_POST["dtagendamento"];
$hr_agendamento = $_POST["hragendamento"];

session_start();

$_SESSION['psicologo'] = $nm_psicologo;
$_SESSION['paciente'] = $nm_paciente;
$_SESSION['dt_agendamento'] = $dt_agendamento;
$_SESSION['hr_agendamento'] = $hr_agendamento;
	
if($nm_psicologo == " " || $nm_paciente == " " ||  $dt_agendamento == " "||  $hr_agendamento == " ")
{
	echo "dados invalidos!!";
}
else{
$res = $con->query("INSERT INTO tb_agendamento (nm_psicologo,nm_paciente,dt_agendamento,hr_agendamento) 
					VALUES 
					('$nm_psicologo', 				
					'$nm_paciente',
                    '$dt_agendamento',
					'$hr_agendamento')");
 header ("Location: pacienteagendamento.php");
}
$con->close();
?>