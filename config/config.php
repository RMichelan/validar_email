<?php 

	date_default_timezone_set('America/Sao_Paulo');

	$host	 = 'localhost';
	$usuario = 'root';
	$senha 	 = '';
	$bd		 = 'test';

	$conn = new PDO("mysql:host=$host;dbname=$bd", $usuario, $senha);

	// if ($conn) 
	// {
	// 	echo "CONECTOU!!!";
	// } 
	// else 
	// {
	// 	echo "FALHA NA CONEXÃO...";
	// }

 ?>