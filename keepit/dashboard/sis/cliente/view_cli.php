<?php
	$id_cli = (int) $_GET['id_cli'];
	$sql = mysqli_query($con, "select * from cliente where id_cli = '".$id_cli."';");
	$row = mysqli_fetch_array($sql);
?>

<div id="main" class="container-fluid">
	<br>
		<h3 class="page-header">Visualizar registro de Clientes - <?php echo $id_cli;?></h3>
	
	<!-- 1ª LINHA -->
	
	<div class="row">
		<div class="col-md-1">
			<p><strong>ID</strong></p>
			<p><?php echo $row['id_cli'];?></p>
		</div>

		<div class="col-md-5">
			<p><strong>Nome do cliente</strong></p>
			<p><?php echo $row['nome'];?></p>
		</div>

		<div class="col-md-4">
			<p><strong>E-mail</strong></p>
			<p><?php echo $row['email'];?></p>
		</div>

		<div class="col-md-3">
			<p><strong>Senha</strong></p>
			<p><?php echo $row['senha']; ?></p>
		</div>
	</div>
	
	<!-- 2ª LINHA -->
	
	<div class="row">

		<div class="col-md-2">
			<p><strong>Nível</strong></p>
			<p><?php switch($row['nivel'])
					{
						case 1: echo "CLIENTE";break;
						case 2: echo "ADMINISTRADOR DO RESTAURANTE";break;
						case 3: echo "ADMINISTRADOR GERAL";break;
					}
				?>
			</p>
		</div>

		<div class="col-md-3">
			<p><strong>CEP</strong></p>
			<p><?php echo $row['cep']; ?></p>
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
			<a href="?page=lista_cli" class="btn btn-default">Voltar</a>
			<?php echo "<a href=?page=fedit_cli&id_cli=".$row['id_cli']." class='btn btn-primary'>Editar</a>";?>
			<?php
				if($row["ativo"]==1){
					echo "<a href=?page=block_cli&id_cli=".$row['id_cli']." class='btn btn-danger'>Bloquear</a>";
				}else if($row["ativo"]==0){
					echo "<a href=?page=ativa_cli&id_cli=".$row['id_cli']." class='btn btn-success'>&nbsp;&nbsp;&nbsp;Ativar&nbsp;&nbsp;</a>";
				}
				?>
		</div>
	</div>
</div>