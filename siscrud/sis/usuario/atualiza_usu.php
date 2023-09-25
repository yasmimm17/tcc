<?php
if(!isset($_POST["matricula"])) header("Location: \siscrud/index.php?page=home&msg=1");
$id_cli		  		= $_POST["id_cli"];
$nome		= $_POST["nome"];
$email		= $_POST["email"];
$cep		= $_POST["cep"];
$nivel			= $_POST["nivel"];

$sql = "update usuario set ";
$sql .= "nome='$nome', email='$email', cep='$cep', nivel='$nivel' ";
$sql .= "where id_cli = '$id_cli';";

$resultado = mysqli_query($con, $sql)or die(mysqli_error());

if($resultado){
	header('Location: \siscrud/index.php?page=lista_usu&msg=2');
    mysqli_close($con);
}else{
	header('Location: \siscrud/index.php?page=lista_usu&msg=6');
    mysqli_close($con);
}

?>
