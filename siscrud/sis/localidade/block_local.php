<?php
if(!isset($_POST["matricula"])) header("Location: \GitHub/tcc/siscrud/index.php?page=home&msg=1");
$cep = (int) $_GET['cep'];

$sql = "update localidade set ";
$sql .= "ativo='0' ";
$sql .= "where cep = '".$cep."';";

$resultado = mysqli_query($con, $sql)or die(mysqli_error($con));

if($resultado){
	header('Location: \GitHub/tcc/siscrud/index.php?page=lista_local&msg=3');
	mysqli_close($con);
}else{
	header('Location: \GitHub/tcc/siscrud/index.php?page=lista_local&msg=5');
	mysqli_close($con);
}

?>
