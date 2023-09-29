<?php
if(!isset($_POST["matricula"])) header("Location: \GitHub/tcc/siscrud/index.php?page=home&msg=1");
$id_cli = (int) $_GET['id_cli'];

$sql = "update usuario set ";
$sql .= "ativo='1' ";
$sql .= "where id_cli = '".$id_cli."';";

$resultado = mysqli_query($con, $sql)or die(mysqli_error());

if($resultado){
	header('Location: \GitHub/tcc/siscrud/index.php?page=lista_usu&msg=5');
    mysqli_close($con);
}else{
	header('Location: \GitHub/tcc/siscrud/index.php?page=lista_usu&msg=6');
    mysqli_close($con);
}
?>
