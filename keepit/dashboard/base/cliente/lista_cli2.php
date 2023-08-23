<?php
    $con = mysqli_connect("localhost", "root", "", "keepit");

    $sql = "select * from cliente;";

    $result = mysqli_query($con, $sql);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<table class="table">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Cep</th>
        </tr>
    </thead>
    <?php
        while($info = mysqli_fetch_array($result)){
    ?>
        <tbody>
            <?php
                echo "
            ?>
            <tr>
                <td>
                    <?php
                        $info['id_cli']
                    ?>
                </td>
                <td>
                    <?php
                        $info['nome']
                    ?>
                </td>
                <td>
                    <?php
                        $info['email']
                    ?>
                </td>
                <td>
                    <?php
                        $info['senha']
                    ?>
                </td>
                <td>
                    <?php
                        $info['cep']
                    ?>
                </td>
            </tr>                    
        </tbody>
    <?php
        ";}
    ?>
</table>