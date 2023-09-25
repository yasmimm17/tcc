<?php
	$nivel_necessario = 2;
	include "base/testa_nivel.php";
	//include "base\conexao.php";
	$id_marca = $_GET['id_marca'];
	$sql = mysqli_query($con, "select * from marca_rede where id_marca = '".$id_marca."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<br><h3 class="page-header">Editar registro da Marca - <?php echo $id_marca;?></h3>

	<!-- Área de campos do formulário de edição-->

	<form action="?page=atualiza_marca&id_marca=<?php echo $row['id_marca']; ?>" method="post">

	<!-- 1ª LINHA -->	
	<div class="row"> 
		<input type="hidden" name="id_marca" value="<?php echo $row['id_marca'] ?>">
		<div class="form-group col-md-4">
			<label for="nome_marca">Nome da Marca</label>
			<input type="text" class="form-control" name="nome_marca" maxlength="60" value="<?php echo $row['nome_marca'] ?>">
		</div>
		<div class="form-group col-md-3">
			<label for="logo_marca">Logo</label>
			<input type="file" class="form-control" name="logo_marca" value="<?php echo $row['logo_marca'] ?>">
		</div>
	</div>

	<hr/>

	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_marca" class="btn btn-secondary">Voltar</a>
			<button type="submit" class="btn btn-primary">Salvar Alterações</button>
		</div>
	</div>
</div>