<?php
    require_once('../dao/FabricaConexao.php');
    $db = new FabricaConexao();
    
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);

    $conexao = $db->obterConexao();
    if (is_null($conexao)) {
        die('<b>Não foi possível se conectar ao banco</b>');
    }

	$sqlstring = "SELECT * FROM usuario WHERE email = '$email' AND senha='$senha'";
	$info = mysqli_query($conexao, $sqlstring);
	if (!$info) { die('<b>Query Invalida: </b>' . mysqli_error($conexao)); }

    $registro = mysqli_num_rows($info);	
	
	if($registro!=1){
		echo "Usuario nao localizado!!!!!";
		echo "<br><a href='../views/login.html'>Voltar</a>";
	}else{
		$dados = mysqli_fetch_array($info);	
		session_start();
		$_SESSION['id'] = $dados['id'];
		$_SESSION['email'] = $dados['email'];
		$_SESSION['log'] = 'ativo';	
        mysqli_close($conexao);

		header("location:../index.html");
	}
?>