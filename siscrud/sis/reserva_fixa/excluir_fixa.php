<?php
if(!isset($_POST["matricula"])) header("Location: \siscrud/index.php?page=home&msg=1");
$id_reserva = $_GET['id_reserva'];
 
$sql = "delete from reserva_fixa where id_reserva = '$id_reserva';"; 

$resultado = mysqli_query($con, $sql)or die(mysqli_error());

if ($resultado) {
    header('Location: \siscrud/index.php?page=lista_fixa&msg=3');
    mysqli_close($con);
}else{
    header('Location: \siscrud/index.php?page=lista_fixa&msg=4');
    mysqli_close($con);
}
?>
