<?php
include("conectaBanco.php");
$sql = $con->query("SELECT * FROM chat1");
$linha = $sql->fetch_array();
$teste = $linha["nome"];
while($linha = $sql->fetch_array()) {
	echo "<h3>".$linha['nome']."</h3>";
	echo "<p>".$linha['mensagem']."</p>";
}
?>