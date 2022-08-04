<?php
$nm_email = $_POST["email"];
$senha = $_POST["senha"];


include "conectaBanco.php";
$res = $con->query("SELECT * FROM tb_psicologo where nm_email='$nm_email' and senha='$senha'"); 

$linhas = mysqli_num_rows($res); 
	if (mysqli_connect_error($con))

{

	echo "A conexão MySQLi apresentou erro: " . $con->connect_error();

}
else if($linhas == 0)  // testa se a consulta retornou algum registro
{
	
	echo "<script> alert('Erro ao iniciar sessão, tente novamente!');window.location.href = 'login_psi.php'</script>";
}
else if($linhas!=0)
{
    header ("Location: indexpsicologod.php");
}


// USA UTF-8 <3

$con->close();
?>