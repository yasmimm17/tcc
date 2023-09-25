<?php
	$nivel_necessario = 2;
	include "base/testa_nivel.php";
	//include "base\conexao.php";
	$id_invent = $_GET['id_invent'];
	$sql = mysqli_query($con, "select * from inventario where id_invent = '".$id_invent."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<br><h3 class="page-header">Editar registro do Inventário - <?php echo $id_invent;?></h3>

	<!-- Área de campos do formulário de edição-->

	<form action="?page=atualiza_invent&id_invent=<?php echo $row['id_invent']; ?>" method="post">

	<!-- 1ª LINHA -->	
	<div class="row"> 
		<input type="hidden" name="id_invent" value="<?php echo $row['id_invent'] ?>">
		<div class="form-group col-md-2">
			<label for="qtde">Quantidade de mesas</label>
			<input type="text" class="form-control" name="qtde" min="1" value="<?php echo $row['qtde'] ?>">
		</div>
		<div class="form-group col-md-1">
			<label for="id_mesa">ID da Mesa</label>
			<input type="number" class="form-control" name="id_mesa" value="<?php echo $row['id_mesa'] ?>">
		</div>
		<div class="form-group col-md-1">
			<label for="id_res">ID do Restaurante</label>
			<input type="number" class="form-control" name="id_res" value="<?php echo $row['id_res'] ?>">
		</div>
	</div>

	<hr/>

	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_invent" class="btn btn-secondary">Voltar</a>
			<button type="submit" class="btn btn-primary">Salvar Alterações</button>
		</div>
	</div>
</div>