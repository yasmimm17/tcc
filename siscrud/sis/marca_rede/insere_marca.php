<?php
    // Conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "keepit";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Coleta os dados do formulário
    $nome_marca = $_POST['nome_marca'];
    $logo_marca = file_get_contents($_FILES['logo_marca']['tmp_name']);

    // Prepara e executa a consulta SQL para inserir os dados
    $sql = "INSERT INTO marca_rede (nome_marca, logo_marca) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $nome_marca, $logo_marca);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header('Location: \GitHub/tcc/siscrud/index.php?page=lista_marca&msg=1');
        mysqli_close($con);
    } else {
        header('Location: \GitHub/tcc/siscrud/index.php?page=lista_marca&msg=4');
        mysqli_close($con);
    }

    $stmt->close();
    $conn->close();
?>
