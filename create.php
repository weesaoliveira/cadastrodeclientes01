<?php
session_start();

require_once 'dbconnect.php';

function clear($input){
	global $connect;
	//proteçao sql injection
	$var = mysqli_escape_string($connect, $input);
	//proteção xss (cross)
	$var = htmlspecialchars($var);
	return $var;


}

if(isset($_POST['btn-cadastrar'])):
$nome = clear($_POST['nome']);
$sobrenome = clear($_POST['sobrenome']);
$email = clear($_POST['email']);
$idade = clear($_POST['idade']);

	$sql = "INSERT INTO clientes(nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('location: ../index.php?sucesso');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('location: ../index.php?falhou');

endif;
endif;