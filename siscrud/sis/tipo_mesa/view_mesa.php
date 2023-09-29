<?php
	$nivel_necessario = 2;
	include "base/testa_nivel.php";
	$id_mesa = $_GET['id_mesa'];
	$sql = mysqli_query($con, "select * from tipo_mesa where id_mesa = '".$id_mesa."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<h3 class="page-header">Visualizar registro do Tipo de mesa - <?php echo $id_mesa; ?> </h3>
	<div class="row">
		<div class="col-md-2">
			<p><strong>ID</strong></p>
			<p><?php echo $row['id_mesa'];?></p>
		</div>
		<div class="col-md-2">
			<p><strong>Lugares na Mesa</strong></p>
			<p><?php echo $row['lugares_mesa'];?></p>
		</div>
	</div>
	<hr/>
	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_mesa" class="btn btn-default">Voltar</a>
				<?php echo "<a href=?page=fedit_mesa&id_mesa=".$row['id_mesa']." class='btn btn-primary'>Editar</a>";?>
				<?php echo "<a href=?page=excluir_mesa&id_mesa=".$row['id_mesa']." class='btn btn-danger'>Excluir</a>";?>
		</div>
	</div>
</div>
