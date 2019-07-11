<?php

	include 'config/config.php';

	$query = "SELECT nome, login, email FROM usuario WHERE id = 1";
	$exec = $conn->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	$exec->execute();
	$row = $exec->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);

	$token = $row[0] . $row[1] . $row[2];
	$hash = md5($token);

	echo "<a href='http://localhost/testes_php/validar_email/confirma_email.php?tkn=". $hash . "'>http://localhost/testes_php/validar_email/confirma_email.php?tkn=". $hash . "</a>";

?>