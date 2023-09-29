<?php
if(!isset($_POST["matricula"])) header("Location: \GitHub/tcc/siscrud/index.php?page=home&msg=1");
$id_res = (int) $_GET['id_res'];

$sql = "update restaurante set ";
$sql .= "ativo='1' ";
$sql .= "where id_res = '".$id_res."';";

$resultado = mysqli_query($con, $sql)or die(mysqli_error());

if($resultado){
	header('Location: \GitHub/tcc/siscrud/index.php?page=lista_res&msg=4');
    mysqli_close($con);
}else{
	header('Location: \GitHub/tcc/siscrud/index.php?page=lista_res&msg=5');
    mysqli_close($con);
}
?>
