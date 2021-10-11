<?php
require_once('../dao/FabricaConexao.php');

$user = mysqli_real_escape_string($conexao, $_POST['usuario']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$password = mysqli_real_escape_string($conexao, md5($_POST['Confirmar_senha']));

	$query = "INSERT INTO usuario(user, email, senha) 
	VALUES ('$user', '$email', '$password')";
    
    $query = mysqli_query($conexao, $query);
    
    header("location:../index.html");

?>