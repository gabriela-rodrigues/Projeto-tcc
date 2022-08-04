<?php
// configurações do banco de dados
$servidorLocal = "localhost";
$usuario_bd = "root";
$senha_bd = "usbw";
$banco = "db_resiliencemind";

$con = new mysqli($servidorLocal, $usuario_bd, $senha_bd, $banco);

if(!$con){
	echo "A conexão com banco falhou";
}

?>