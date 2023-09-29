<?php
if(!isset($_POST["matricula"])) header("Location: \GitHub/tcc/siscrud/index.php?page=home&msg=1");
$nome		= $_POST["nome"];
$email		= $_POST["email"];
$senha			= $_POST["senha"];
$cep		= $_POST["cep"];
$nivel			= $_POST["nivel"];

$sql = "insert into usuario values ";
$sql .= "('0','$nome', '$email', '".sha1($senha)."', '$cep','$nivel','1');";

$resultado = mysqli_query($con, $sql) or die(mysqli_error($con));

if($resultado){
	header('Location: \GitHub/tcc/siscrud/index.php?page=lista_usu&msg=1');
	mysqli_close($con);
}else{
	header('Location: \GitHub/tcc/siscrud/index.php?page=lista_usu&msg=6');
	mysqli_close($con);
}
?>