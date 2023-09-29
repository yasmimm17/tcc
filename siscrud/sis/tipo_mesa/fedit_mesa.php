<?php
	$nivel_necessario = 2;
	include "base/testa_nivel.php";
	//include "base\conexao.php";
	$id_mesa = $_GET['id_mesa'];
	$sql = mysqli_query($con, "select * from tipo_mesa where id_mesa = '".$id_mesa."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<br><h3 class="page-header">Editar registro do Tipo de Mesa - <?php echo $id_mesa;?></h3>

	<!-- Área de campos do formulário de edição-->

	<form action="?page=atualiza_mesa&id_mesa=<?php echo $row['id_mesa']; ?>" method="post">

	<!-- 1ª LINHA -->	
	<div class="row"> 
		<input type="hidden" name="id_mesa" value="<?php echo $row['id_mesa'] ?>">
		<div class="form-group col-md-2">
			<label for="lugares_mesa">Lugares na mesa</label>
			<input type="number" class="form-control" name="lugares_mesa" min="2" value="<?php echo $row['lugares_mesa'] ?>">
		</div>
	</div>

	<hr/>

	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_mesa" class="btn btn-secondary">Voltar</a>
			<button type="submit" class="btn btn-primary">Salvar Alterações</button>
		</div>
	</div>
</div>