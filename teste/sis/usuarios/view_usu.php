﻿<?php
	$nivel_necessario = 3;
	include "base/testa_nivel.php";
	$id = (int) $_GET['id'];
	$sql = mysqli_query($con, "select * from usuario where id = '".$id."';");
	$row = mysqli_fetch_array($sql);
?>

<div id="main" class="container-fluid">
	<br>
		<h3 class="page-header">Visualizar registro da Usuários - <?php echo $id;?></h3>
	
	<!-- 1ª LINHA -->
	
	<div class="row">
		<div class="col-md-1">
			<p><strong>ID</strong></p>
			<p><?php echo $row['id'];?></p>
		</div>

		<div class="col-md-3">
			<p><strong>Usuário</strong></p>
			<p><?php echo $row['usuario']; ?></p>
		</div>

		<div class="col-md-4">
			<p><strong>Senha</strong></p>
			<p><?php echo $row['senha']; ?></p>
		</div>

		<div class="col-md-2">
			<p><strong>Nível</strong></p>
			<p><?php switch($row['nivel'])
					{
						case 1: echo "RELATÓRIO";break;
						case 2: echo "CADASTRO";break;
						case 3: echo "ADMINISTRADOR";break;
					}
				?>
			</p>
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
	
	<!-- 2ª LINHA -->
	
	<div class="row">

	</div>
	

	<hr/>
	
	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_usu" class="btn btn-default">Voltar</a>
			<?php echo "<a href=?page=fedita_usu&id=".$row['id']." class='btn btn-primary'>Editar</a>";?>
			<?php
				if($row["ativo"]==1){
					echo "<a href=?page=block_usu&id=".$row['id']." class='btn btn-danger'>Bloquear</a>";
				}else if($row["ativo"]==0){
					echo "<a href=?page=ativa_usu&id=".$row['id']." class='btn btn-success'>&nbsp;&nbsp;&nbsp;Ativar&nbsp;&nbsp;</a>";
				}
				?>
		</div>
	</div>
</div>
