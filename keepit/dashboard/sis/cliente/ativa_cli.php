<?php
$id_cli = (int) $_GET['id_cli'];

$sql = "update cliente set ";
$sql .= "ativo='1' ";
$sql .= "where id_cli = '".$id_cli."';";

$resultado = mysqli_query($con, $sql)or die(mysqli_error());

if($resultado){
	header('Location: \keepit/dashboard/index.php?page=lista_cli&msg=5');
    mysqli_close($con);
}else{
	header('Location: \keepit/dashboard/index.php?page=lista_cli&msg=6');
    mysqli_close($con);
}
?>