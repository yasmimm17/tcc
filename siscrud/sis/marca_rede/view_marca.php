<?php
	$nivel_necessario = 2;
	include "base/testa_nivel.php";
	$id_marca = $_GET['id_marca'];
	$sql = mysqli_query($con, "select * from marca_rede where id_marca = '".$id_marca."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<h3 class="page-header">Visualizar registro da Marca - <?php echo $id_marca; ?> </h3>
	<div class="row">
		<div class="col-md-2">
			<p><strong>ID</strong></p>
			<p><?php echo $row['id_marca'];?></p>
		</div>
		<div class="col-md-5">
			<p><strong>Nome da Marca</strong></p>
			<p><?php echo $row['nome_marca'];?></p>
		</div>
	</div>
	<hr/>
	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_marca" class="btn btn-default">Voltar</a>
				<?php echo "<a href=?page=fedit_marca&id_marca=".$row['id_marca']." class='btn btn-primary'>Editar</a>";?>
				<?php echo "<a href=?page=excluir_marca&id_marca=".$row['id_marca']." class='btn btn-danger'>Excluir</a>";?>
		</div>
	</div>
</div>
