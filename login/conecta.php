<?php
	$host = "localhost";
	$usuario = "root";
	$senha ="";
	$banco = "uninove";

	$conexao = new MYSQLi("$host","usuario", "$senha","$banco");

	if ($conexao -> connect_error) {
		echo "Erro de Conexão!";
	}
	else{
		echo "CONECTADO!";
	}
?>