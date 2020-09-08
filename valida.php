<?php
session_start();
include_once("conexao.php");
$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
if($btnLogin){
	$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	//echo "$usuario - $senha";
	if((!empty($usuario)) AND (!empty($senha))){
		//Gerar a senha criptografa
		//echo password_hash($senha, PASSWORD_DEFAULT);
		//Pesquisar o usuário no BD
		$result_usuario = "SELECT id, nome, sobrenome, email, senha, rua, numero, bairro, cidade, uf, cep FROM usuarios WHERE usuario='$usuario' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			if(password_verify($senha, $row_usuario['senha'])){
				$_SESSION['id'] = $row_usuario['id'];
				$_SESSION['nome'] = $row_usuario['nome'];
				$_SESSION['sobrenome'] = $row_usuario['sobrenome'];
				$_SESSION['email'] = $row_usuario['email'];
				$_SESSION['rua'] = $row_usuario['rua'];
				$_SESSION['numero'] = $row_usuario['numero'];
				$_SESSION['bairro'] = $row_usuario['bairro'];
				$_SESSION['cidade'] = $row_usuario['cidade'];
				$_SESSION['uf'] = $row_usuario['uf'];
				$_SESSION['cep'] = $row_usuario['cep'];
				header("Location: administrativo.php");
			}else{
				$_SESSION['msg'] = "<div class='alert alert-danger'>Login ou senha incorreto!</div>";
				header("Location: login.php");
			}
		}
	}else{
		$_SESSION['msg'] = "<div class='alert alert-danger'>Login ou senha incorreto!</div>";
		header("Location: login.php");
	}
}else{
	$_SESSION['msg'] = "<div class='alert alert-danger'>Página não encontrada</div>";
	header("Location: login.php");
}
