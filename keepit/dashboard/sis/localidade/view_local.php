<?php
	$cep = (int) $_GET['cep'];
	$sql = mysqli_query($con, "select * from localidade where cep = '".$cep."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<h3 class="page-header">Visualizar registro da Localidade - <?php echo $cep; ?> </h3>
	<div class="row">
		<div class="col-md-2">
			<p><strong>CEP</strong></p>
			<p><?php echo $row['cep'];?></p>
		</div>
		<div class="col-md-5">
			<p><strong>Logradouro</strong></p>
			<p><?php echo $row['logradouro'];?></p>
		</div>
		<div class="col-md-5">
			<p><strong>Bairro</strong></p>
			<p><?php echo $row['bairro'];?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<p><strong>Cidade</strong></p>
			<p><?php echo $row['cidade'];?></p>
		</div>
		<div class="col-md-2">
			<p><strong>UF</strong></p>
		</div>
			<p><?php echo $row['uf'];?></p>
		</div>
	</div>
	<hr/>
	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_local" class="btn btn-default">Voltar</a>
				<?php echo "<a href=?page=fedit_local&id_local=".$row['id_local']." class='btn btn-primary'>Editar</a>";?>
				<?php echo "<a href=?page=excluir_local&id_local=".$row['id_local']." class='btn btn-danger'>Excluir</a>";?>
		</div>
	</div>
</div>