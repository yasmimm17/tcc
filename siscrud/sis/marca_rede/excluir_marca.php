<?php
if(!isset($_POST["matricula"])) header("Location: \siscrud/index.php?page=home&msg=1");
$id_marca = $_GET['id_marca'];
 
$sql = "delete from marca_rede where id_marca = '$id_marca';"; 

$resultado = mysqli_query($con, $sql)or die(mysqli_error());    

if ($resultado) {
    header('Location: \siscrud/index.php?page=lista_marca&msg=3');
    mysqli_close($con);
}else{
    header('Location: \siscrud/index.php?page=lista_marca&msg=4');
    mysqli_close($con);
}
?>