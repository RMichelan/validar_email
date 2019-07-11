<?php 

	include 'config/config.php';

	$query = "SELECT hash_email FROM usuario WHERE id = 1";
	$exec = $conn->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	$exec->execute();
	$row = $exec->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);

	$tkn = $_GET["tkn"];

	if ($row[0] == $tkn)
	{
		$query_altera = "UPDATE usuario SET email_valido = :email_valido WHERE hash_email = :hash_email";


	    $alterar = $conn->prepare($query_altera, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	    $alterar->execute(array(
	        ':hash_email' 	=> $tkn,
	        ':email_valido' => 1
	    ));

	    echo "E-MAIL VALIDADO COM SUCESSO!";
	} 
	else
	{
		echo "E-MAIL INVÁLIDO!";
	}

 ?>