<?php
$id_cli = (int) $_GET['id_cli'];

$sql = "update cliente set ";
$sql .= "ativo='0' ";
$sql .= "where id_cli = '".$id_cli."';";

$resultado = mysqli_query($con, $sql)or die(mysqli_error($con));

if($resultado){
	header('Location: \keepit/dashboard/index.php?page=lista_cli&msg=3');
	mysqli_close($con);
}else{
	header('Location: \keepit/dashboard/index.php?page=lista_cli&msg=6');
	mysqli_close($con);
}

?>