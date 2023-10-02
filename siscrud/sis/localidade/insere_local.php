<?php
if(!isset($_POST["matricula"])) header("Location: \GitHub/tcc/siscrud/index.php?page=home&msg=1");
$cep		= $_POST["cep"];
$cidade		= $_POST["cidade"];
$uf		= $_POST["uf"];

$sql = "insert into localidade values ";
$sql .= "('$cep','$cidade', '$uf', 1);";

$resultado = mysqli_query($con, $sql) or die(mysqli_error($con));

if($resultado){
	header('Location: \GitHub/tcc/siscrud/index.php?page=lista_local&msg=1');
	mysqli_close($con);
}else{
	header('Location: \GitHub/tcc/siscrud/index.php?page=lista_local&msg=5');
	mysqli_close($con);
}
?>