<?php
	$id_res = (int) $_GET['id_res'];
	$sql = mysqli_query($con, "select * from restaurante where id_res = '".$id_res."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<h3 class="page-header">Visualizar registro do Restaurante - <?php echo $id_res; ?> </h3>
	<div class="row">
		<div class="col-md-2">
			<p><strong>ID</strong></p>
			<p><?php echo $row['id_res'];?></p>
		</div>
		<div class="col-md-5">
			<p><strong>Nome do Restaurante</strong></p>
			<p><?php echo $row['nome_res'];?></p>
		</div>
		<div class="col-md-2">
			<p><strong>Número do restaurante</strong></p>
			<p><?php echo $row['nr_res'];?></p>
		</div>
		<div class="col-md-2">
			<p><strong>Sede</strong></p>
			<p><?php echo $row['tipo_sede_res'];?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<p><strong>Complemento</strong></p>
			<p><?php echo $row['comp_res'];?></p>
		</div>
		<div class="col-md-3">
			<p><strong>Usuário</strong></p>
			<p><?php echo $row['usuario'];?></p>
        </div>
        <div class="col-md-3">
			<p><strong>Senha</strong></p>
			<p><?php echo $row['senha'];?></p>
        </div>
        <div class="col-md-2">
			<p><strong>Nível</strong></p>
			<p><?php echo $row ['nivel'];?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
			<p><strong>Cep</strong></p>
			<p><?php echo $row['cep'];?></p>
		</div>
        <div class="col-md-2">
			<p><strong>ID da marca</strong></p>
			<p><?php echo $row['id_marca'];?></p>
		</div>
	</div>
	<hr/>
	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_res" class="btn btn-default">Voltar</a>
				<?php echo "<a href=?page=fedit_res&id_res=".$row['id_res']." class='btn btn-primary'>Editar</a>";?>
				<?php echo "<a href=?page=excluir_res&id_res=".$row['id_res']." class='btn btn-danger'>Excluir</a>";?>
		</div>
	</div>
</div>