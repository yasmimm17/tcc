<?php
if(!isset($_POST["matricula"])) header("Location: \siscrud/index.php?page=home&msg=1");
$id = $_GET['id'];
 
$sql = "delete from produto where id_prod = '$id';"; 

$resultado = mysqli_query($con, $sql)or die(mysqli_error());

if ($resultado) {
    header('Location: \siscrud/index.php?page=lista_prod&msg=3');
    mysqli_close($con);
}else{
    header('Location: \siscrud/index.php?page=lista_prod&msg=4');
    mysqli_close($con);
}
?>
