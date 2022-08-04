<?php
include "conectaBanco.php"; 
// obtem os valores digitados
$cd_senha = $_POST["acesso"];

session_start();

$_SESSION['acesso'] = $cd_senha;


$res = $con->query("INSERT INTO tb_acesso (cd_senha) 
					VALUES 
					('$cd_senha')");
    
 echo "<script> alert('ID cadastrado com sucesso!');window.location.href = 'indexpsicologod.php'</script>";

$con->close();
?>