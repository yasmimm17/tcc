<?php
if(!isset($_POST["matricula"])) header("Location: \siscrud/index.php?page=home&msg=1");
$id_res = (int) $_GET['id_res'];

$sql = "update restaurante set ";
$sql .= "ativo='0' ";
$sql .= "where id_res = '".$id_res."';";

$resultado = mysqli_query($con, $sql)or die(mysqli_error($con));

if($resultado){
	header('Location: \siscrud/index.php?page=lista_res&msg=3');
	mysqli_close($con);
}else{
	header('Location: \siscrud/index.php?page=lista_res&msg=5');
	mysqli_close($con);
}

?>
