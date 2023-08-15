<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "keepit";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$cep = "12345-677";
$newLogradouro = "Nova Rua Exemplo";

$sql = "UPDATE localidade SET logradouro = '$newLogradouro' WHERE cep = '$cep'";

if ($conn->query($sql) === TRUE) {
    echo "Dados atualizados com sucesso!";
    include "lista_local.php";
} else {
    echo "Erro ao atualizar dados: " . $conn->error;
    
}

$conn->close();
?>
