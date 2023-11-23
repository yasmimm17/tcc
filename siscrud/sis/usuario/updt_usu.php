<?php
$con = mysqli_connect("localhost", "root", "", "keepit");
$id_cli		  		= $_POST["id_cli"];
$nome		= $_POST["nome"];
$email		= $_POST["email"];
$nivel			= $_POST["nivel"];


$sql = "update usuario set ";
$sql .= "nome='$nome', email='$email', nivel='$nivel'";
$sql .= "where id_cli = '$id_cli';";

$resultado = mysqli_query($con, $sql)or die(mysqli_error());

if($resultado){
	header('Location: \GitHub/tcc/siscrud/base/dados.php');
    mysqli_close($con);
}else{
	echo "erro ao editar os dados";
    mysqli_close($con);
}

?>
