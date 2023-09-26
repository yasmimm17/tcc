<?php
if(!isset($_POST["matricula"])) header("Location: \siscrud/index.php?page=home&msg=1");
$idreserva_ondemand = $_GET['idreserva_ondemand'];
 
$sql = "delete from reserva_ondemand where idreserva_ondemand = '$idreserva_ondemand';"; 

$resultado = mysqli_query($con, $sql)or die(mysqli_error());

if ($resultado) {
    header('Location: \siscrud/index.php?page=lista_demand&msg=3');
    mysqli_close($con);
}else{
    header('Location: \siscrud/index.php?page=lista_demand&msg=4');
    mysqli_close($con);
}
?>
