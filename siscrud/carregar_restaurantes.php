<?php
include "base/config.php";
if(!isset($_SESSION)) session_start();
//Verfica se o id do usuário está definido na sessão
if(isset($_SESSION["UsuarioID"])) {
    $usuario_id = $_SESSION["UsuarioID"];
} else{
    //Redireciona o usuário para o login se não estiver logado
    header("location: base/login.php");
    exit;
}

//Consulta no banco de dados para obter os dados do restaurante
$sql = "select * from restaurante where id_res = '$id_res'";

//Executar consulta
$result = mysqli_query($con, $sql);

if($result){
  //Recuperar os dados e apresentá-los
  $row = mysqli_fetch_assoc($result);

}

// Retorna os dados dos restaurantes como JSON
header('Content-Type: application/json');
echo json_encode($restaurantes);
?>
