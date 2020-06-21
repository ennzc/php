<?php
	session_start();
	include 'conecta.php';

	$email = $_POST['usarname'];
	$senha = $_POST['pass'];

	$consulta = "SELECT * FROM clientes WHERE email = 'email' AND senha = '$senha'";

	$resultado = $conexao->query($consulta);
	$registros = $resultados->num_rows;
	$resultado_usuario = mysql_fetch_assoc($resultado);

	if ($registros == 1) {
		$_SESSION['id'] = $resultado_usuario['id'];
		$_SESSION['nome'] = $resultado_usuario['nome'];
		$_SESSION['email'] = $resultado_usuario['email'];

		header('location: restrita.php');

	}
	else{
		header('location: index.html');
	}

?>