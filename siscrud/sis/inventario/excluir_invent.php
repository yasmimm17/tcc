<?php
if(!isset($_POST["matricula"])) header("Location: \siscrud/index.php?page=home&msg=1");
$id_invent = $_GET['id_invent'];
 
$sql = "delete from inventario where id_invent = '$id_invent';"; 

$resultado = mysqli_query($con, $sql)or die(mysqli_error());    

if ($resultado) {
    header('Location: \siscrud/index.php?page=lista_invent&msg=3');
    mysqli_close($con);
}else{
    header('Location: \siscrud/index.php?page=lista_invent&msg=4');
    mysqli_close($con);
}
?>