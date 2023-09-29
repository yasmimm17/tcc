<?php
	$nivel_necessario = 2;
	include "base/testa_nivel.php";
	$id_invent = $_GET['id_invent'];
	$sql = mysqli_query($con, "select * from inventario where id_invent = '".$id_invent."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<h3 class="page-header">Visualizar registro do Inventário - <?php echo $id_invent; ?> </h3>
	<div class="row">
		<div class="col-md-2">
			<p><strong>ID</strong></p>
			<p><?php echo $row['id_invent'];?></p>
		</div>
		<div class="col-md-2">
			<p><strong>Quantidade de Mesas</strong></p>
			<p><?php echo $row['qtde'];?></p>
		</div>
		<div class="col-md-2">
			<p><strong>ID da Mesa</strong></p>
			<p><?php echo $row['id_mesa'];?></p>
		</div>
		<div class="col-md-2">
			<p><strong>ID do Restaurante</strong></p>
			<p><?php echo $row['id_res'];?></p>
		</div>
	</div>
	<hr/>
	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_invent" class="btn btn-default">Voltar</a>
				<?php echo "<a href=?page=fedit_invent&id_invent=".$row['id_invent']." class='btn btn-primary'>Editar</a>";?>
				<?php echo "<a href=?page=excluir_invent&id_invent=".$row['id_invent']." class='btn btn-danger'>Excluir</a>";?>
		</div>
	</div>
</div>
