<?php
if(!isset($_POST["matricula"])) header("Location: \GitHub/tcc/siscrud/index.php?page=home&msg=1");
$id_mesa = $_GET['id_mesa'];
 
$sql = "delete from tipo_mesa where id_mesa = '$id_mesa';"; 

$resultado = mysqli_query($con, $sql)or die(mysqli_error());    

if ($resultado) {
    header('Location: \GitHub/tcc/siscrud/index.php?page=lista_mesa&msg=3');
    mysqli_close($con);
}else{
    header('Location: \GitHub/tcc/siscrud/index.php?page=lista_mesa&msg=4');
    mysqli_close($con);
}
?>