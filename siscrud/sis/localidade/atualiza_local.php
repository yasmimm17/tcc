<?php
if(!isset($_POST["matricula"])) header("Location: \siscrud/index.php?page=home&msg=1");
$cep		  		= $_POST["cep"];
$cidade		= $_POST["cidade"];
$uf		= $_POST["uf"];

$sql = "update localidade set ";
$sql .= "cidade='$cidade', uf='$uf' ";
$sql .= "where cep = '$cep';";

$resultado = mysqli_query($con, $sql)or die(mysqli_error());

if($resultado){
	header('Location: \siscrud/index.php?page=lista_local&msg=2');
    mysqli_close($con);
}else{
	header('Location: \siscrud/index.php?page=lista_local&msg=5');
    mysqli_close($con);
}

?>
