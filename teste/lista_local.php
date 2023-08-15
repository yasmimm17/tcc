<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "keepit";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT cep, logradouro, bairro, cidade, uf FROM localidade";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "CEP: " . $row["cep"] . " | Logradouro: " . $row["logradouro"] . " | Bairro: " . $row["bairro"] . " | Cidade: " . $row["cidade"] . " | UF: " . $row["uf"] . "<br>";
    }
} else {
    echo "Nenhum resultado encontrado.";
}

$conn->close();
?>
