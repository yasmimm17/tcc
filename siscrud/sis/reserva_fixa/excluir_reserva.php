<?php
$con = mysqli_connect("localhost", "root", "", "keepit");

$id_reserva = $_GET['id_reserva'];
 
$sql = "delete from reserva_fixa where id_reserva = '$id_reserva';"; 

$resultado = mysqli_query($con, $sql)or die(mysqli_error());

if ($resultado) {
    header('Location: \GitHub/tcc/siscrud/sis/reserva_fixa/lista_reserva.php');
    alert('Reserva excluída!');
    mysqli_close($con);
}else{
    header('Location: \GitHub/tcc/siscrud/index.php?page=lista_fixa&msg=4');
    mysqli_close($con);
}
?>
