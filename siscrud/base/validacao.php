<?php
// Verifica se houve POST e se o email ou a senha estão vazios
if (!empty($_POST) and (empty($_POST['email']) or empty($_POST['senha']))) {
	header("Location: login.php"); exit;
}
// Tenta se conectar ao servidor MySQL e ao DB
include "config.php";

$usuario = mysqli_real_escape_string($con, $_POST['email']);
$senha = mysqli_real_escape_string($con, $_POST['senha']);

// Validação do email/senha digitados
$sql  = "select id_cli, email, nome, nivel from usuario where (email = '". $usuario ."') ";
$sql .= "and (senha = '". sha1($senha) ."') and (ativo = 1) limit 1";

//echo $sql; exit;

$query = mysqli_query($con, $sql);

if (mysqli_num_rows($query) != 1) {
	// Mensagem de erro quando os dados são inválidos e/ou o email não foi encontrado
	//header('Content-Type: text/html; charset=utf-8');
	echo "Login invalido!"; exit;
} else {
	// Salva os dados encontados na variável $resultado
	$resultado = mysqli_fetch_assoc($query);
	
////// 4.0 - Salvando os dados na sessão do PHP ////////

	// Se a sessão não existir, inicia uma
	if (!isset($_SESSION)) session_start();

	// Salva os dados encontrados na sessão
	$_SESSION['UsuarioID'] = $resultado['id_cli'];
	$_SESSION['UsuarioNome'] = $resultado['email'];
	$_SESSION['UsuarioNivel'] = $resultado['nivel'];

	// Redireciona o visitante
	if($resultado['nivel'] == 1){
		header('Location: \GitHub/tcc/siscrud/base/inicio.php');
		exit();
	}else{
		header('Location: \GitHub/tcc/siscrud/index.php?page=home');
	}
	
}

?>