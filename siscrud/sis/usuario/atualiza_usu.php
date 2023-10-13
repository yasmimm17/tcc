<?php
if(!isset($_POST["matricula"])) header("Location: \GitHub/tcc/siscrud/index.php?page=home&msg=1");
$id_cli		  		= $_POST["id_cli"];
$nome		= $_POST["nome"];
$email		= $_POST["email"];
$nivel			= $_POST["nivel"];
$foto			= $_POST["foto"];

$sql = "update usuario set ";
$sql .= "nome='$nome', email='$email', nivel='$nivel', foto='$foto' ";
$sql .= "where id_cli = '$id_cli';";

$resultado = mysqli_query($con, $sql)or die(mysqli_error());

if($resultado){
	header('Location: \GitHub/tcc/siscrud/index.php?page=lista_usu&msg=2');
    mysqli_close($con);
}else{
	header('Location: \GitHub/tcc/siscrud/index.php?page=lista_usu&msg=6');
    mysqli_close($con);
}

?>
