<?php
	$id_reserva = (int) $_GET['id_reserva'];
	$sql = mysqli_query($con, "select * from reserva_fixa where id_reserva = '".$id_reserva."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<h3 class="page-header">Visualizar registro da Reserva fixa - <?php echo $id_reserva; ?> </h3>
	<div class="row">
		<div class="col-md-2">
			<p><strong>ID</strong></p>
			<p><?php echo $row['id_reserva'];?></p>
		</div>
		<div class="col-md-3">
			<p><strong>Horário</strong></p>
			<p><?php echo $row['horario'];?></p>
		</div>
		<div class="col-md-2">
			<p><strong>Quantidade de pessoas</strong></p>
			<p><?php echo $row['qtde_pessoas'];?></p>
		</div>
		<div class="col-md-5">
			<p><strong>Observação</strong></p>
			<p><?php echo $row['obs'];?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
			<p><strong>Celular</strong></p>
			<p><?php echo $row['cel_contato'];?></p>
		</div>
		<div class="col-md-2">
			<p><strong>Situação</strong></p>
            <p><?php echo $row['situacao_reserva'];?></p>
        <div class="col-md-2">
			<p><strong>ID do restaurante</strong></p>
			<p><?php echo $row['id_res'];?></p>
		</div>
        <div class="col-md-2">
			<p><strong>ID do cliente</strong></p>
			<p><?php echo $row['id_cli'];?></p>
		</div>
	</div>
	<hr/>
	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_fixa" class="btn btn-default">Voltar</a>
				<?php echo "<a href=?page=fedit_fixa&id_reserva=".$row['id_reserva']." class='btn btn-primary'>Editar</a>";?>
				<?php echo "<a href=?page=excluir_fixa&id_reserva=".$row['id_reserva']." class='btn btn-danger'>Excluir</a>";?>
		</div>
	</div>
</div>