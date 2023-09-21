<?php
	$idreserva_ondemand = (int) $_GET['idreserva_ondemand'];
	$sql = mysqli_query($con, "select * from reserva_ondemand where idreserva_ondemand = '".$idreserva_ondemand."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<h3 class="page-header">Visualizar registro da Reserva por demanda - <?php echo $idreserva_ondemand; ?> </h3>
	<div class="row">
		<div class="col-md-2">
			<p><strong>ID</strong></p>
			<p><?php echo $row['idreserva_ondemand'];?></p>
		</div>
		<div class="col-md-2">
			<p><strong>Quantidade de pessoas</strong></p>
			<p><?php echo $row['qtde_pessoas'];?></p>
		</div>
		<div class="col-md-3">
			<p><strong>Celular</strong></p>
			<p><?php echo $row['cel_contato'];?></p>
		</div>
		<div class="col-md-2">
			<p><strong>Situação</strong></p>
			<p><?php echo $row['sit_reserva_ond'];?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<p><strong>ID do cliente</strong></p>
			<p><?php echo $row['id_cli'];?></p>
		</div>
		<div class="col-md-2">
			<p><strong>ID do restaurante</strong></p>
		</div>
			<p><?php echo $row['id_res'];?></p>
		</div>
	</div>
	<hr/>
	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_demand" class="btn btn-default">Voltar</a>
				<?php echo "<a href=?page=fedit_demand&idreserva_ondemand=".$row['idreserva_ondemand']." class='btn btn-primary'>Editar</a>";?>
				<?php echo "<a href=?page=excluir_demand&idreserva_ondemand=".$row['idreserva_ondemand']." class='btn btn-danger'>Excluir</a>";?>
		</div>
	</div>
</div>