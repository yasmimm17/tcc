<?php
	$nivel_necessario = 2;
	include "base/testa_nivel.php";
	$cep = (int) $_GET['cep'];
	$sql = mysqli_query($con, "select * from localidade where cep = '".$cep."';");
	$row = mysqli_fetch_array($sql);
?>

<div id="main" class="container-fluid">
	<br>
		<h3 class="page-header">Visualizar registro de Localidades - <?php echo $cep;?></h3>
	
	<!-- 1ª LINHA -->
	
	<div class="row">
		<div class="col-md-1">
			<p><strong>Cep</strong></p>
			<p><?php echo $row['cep'];?></p>
		</div>

		<div class="col-md-3">
			<p><strong>Cidade</strong></p>
			<p><?php echo $row['cidade']; ?></p>
		</div>

		<div class="col-md-1">
			<p><strong>UF</strong></p>
			<p><?php echo $row['uf']; ?></p>
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
			<a href="?page=lista_local" class="btn btn-default">Voltar</a>
			<?php echo "<a href=?page=fedit_local&cep=".$row['cep']." class='btn btn-primary'>Editar</a>";?>
			<?php
				if($row["ativo"]==1){
					echo "<a href=?page=block_local&cep=".$row['cep']." class='btn btn-danger'>Bloquear</a>";
				}else if($row["ativo"]==0){
					echo "<a href=?page=ativa_local&cep=".$row['cep']." class='btn btn-success'>&nbsp;&nbsp;&nbsp;Ativar&nbsp;&nbsp;</a>";
				}
				?>
		</div>
	</div>
</div>
