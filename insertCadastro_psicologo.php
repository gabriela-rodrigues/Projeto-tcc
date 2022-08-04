<?php
include "conectaBanco.php"; 
// obtem os valores digitados
$nm_psicologo = $_POST["nome"];
$nm_email = $_POST["email"];
$senha = $_POST["senha"];
$cd_crp = $_POST["crp"];
$dt_formacao = $_POST["dtformacao"];
$dt_nascimento = $_POST["dtnascimento"];
$ds_psicologo = $_POST["dspsicologo"];
$cd_cpf = $_POST["cpf"];
$ds_formacao = $_POST["dsformacao"];

session_start();

$_SESSION['nome'] = $nm_psicologo;
$_SESSION['email']  = $nm_email;
$_SESSION['senha']  = $senha;
$_SESSION['crp']  = $cd_crp;
$_SESSION['dtformacao']  = $dt_formacao;
$_SESSION['dtnascimento']  = $dt_nascimento;
$_SESSION['dspsicologo']  = $ds_psicologo;
$_SESSION['cpf']  = $cd_cpf;
$_SESSION['dsformacao']  = $ds_formacao;


echo $nm_psicologo."<br>";
echo $nm_email."<br>";
echo $senha."<br>";
echo $cd_crp."<br>";
echo $dt_formacao."<br>";
echo $dt_nascimento."<br>";
echo $ds_psicologo."<br>";
echo $cd_cpf."<br>";
echo $ds_formacao."<br>";
    
$res = $con->query("INSERT INTO tb_psicologo (nm_psicologo,cd_cpf,dt_nascimento,dt_formacao,ds_formacao,ds_psicologo,nm_email,senha)
					VALUES 
					('$nm_psicologo', 
					'$cd_cpf',
					'$dt_nascimento',
					'$dt_formacao',
					'$ds_formacao',
					'$ds_psicologo',
					'$nm_email',
					'$senha')");
					
echo "<script> alert('Registro cadastrado com sucesso!');window.location.href = 'login_psi.php'</script>";


$con->close();
?>