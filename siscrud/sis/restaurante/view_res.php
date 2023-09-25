<?php
	$nivel_necessario = 2;
	include "base/testa_nivel.php";
	$id_res = $_GET['id_res'];
	$sql = mysqli_query($con, "select * from restaurante where id_res = '".$id_res."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<h3 class="page-header">Visualizar registro de Restaurante - <?php echo $id_res; ?> </h3>
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
			<p><strong>Número</strong></p>
			<p><?php echo $row['nr_res'];?></p>
		</div>
		<div class="col-md-3">
			<p><strong>Complemento</strong></p>
			<p><?php echo $row['comp_res'];?></p>
		</div>
	</div>
	<div class="row">
        <div class="col-md-2">
			<p><strong>Sede</strong></p>
			<p><?php
				if($row["tipo_sede_res"]==1){
					echo "PRÓPRIA";
				}else if($row["tipo_sede_res"]==0){
					echo "FILIAL";
				}
				?>
			</p>
		</div>
		<div class="col-md-3">
			<p><strong>Cep</strong></p>
			<p><?php echo $row['cep'];?></p>
		</div>
		<div class="col-md-2">
			<p><strong>ID da Marca</strong></p>
			<p><?php echo $row['id_marca'];?></p>
		</div>
		<div class="col-md-2">
			<p><strong>Ativo</strong></p>
			<p><?php
				if($row["ativo"]==1){
					echo "SIM";
				}else if($row["ativo"]==0){
					echo "NÃO";
				}
				?>
			</p>
		</div>
	</div>
	<hr/>
	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_res" class="btn btn-default">Voltar</a>
			<?php echo "<a href=?page=fedit_res&id_res=".$row['id_res']." class='btn btn-primary'>Editar</a>";?>
			<?php
				if($row["ativo"]==1){
					echo "<a href=?page=block_res&id_res=".$row['id_res']." class='btn btn-danger'>Bloquear</a>";
				}else if($row["ativo"]==0){
					echo "<a href=?page=ativa_res&id_res=".$row['id_res']." class='btn btn-success'>&nbsp;&nbsp;&nbsp;Ativar&nbsp;&nbsp;</a>";
				}
				?>
		</div>
	</div>
</div>
