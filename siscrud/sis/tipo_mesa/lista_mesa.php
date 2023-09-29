<?php
	$nivel_necessario = 2;
	include "base/testa_nivel.php";
?>
<div id="main" class="container-fluid">
	<div id="top" class="row">
		<div class="col-md-10">
			<h2>Tipos de mesa</h2>
		</div>

		<div class="col-md-2">
			<!-- Chama o Formulário para adicionar tipos de mesa -->
			<a href="?page=fcad_mesa" class="btn btn-primary pull-right h2"><i class='bx bx-plus-medical'></i> Tipo de mesa</a> 
		</div>
	</div>
	<hr/>

	<div> <?php include "mensagens.php"; ?> </div>

	
	<div id="list" class="row">
		<div class="table-responsive col-md-12">
			<?php
				$quantidade = 5;

				$pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
				$inicio = ($quantidade * $pagina) - $quantidade;

				$data = mysqli_query($con, "select * from tipo_mesa order by id_mesa asc limit $inicio, $quantidade;") or die(mysqli_error("ERRO: ".$con));
				echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
				echo "<thead><tr>";
				echo "<td><strong>ID</strong></td>"; 
				echo "<td><strong>Lugares na mesa</strong></td>"; 
				echo "<td class='actions d-flex justify-content-center'><strong>Ações</strong></td>"; 
				echo "</tr></thead><tbody>";
				while($info = mysqli_fetch_array($data)){ 
					echo "<tr>";
					echo "<td>".$info['id_mesa']."</td>";
					echo "<td>".$info['lugares_mesa']."</td>";
					echo "<td class='actions btn-group btn-group-sm d-flex justify-content-center'>";
					echo "<a class='btn btn-outline-success btn-xs' href=?page=view_mesa&id_mesa=".$info['id_mesa']."> <i class='bx bxs-binoculars'></i> </a>";
					echo "<a class='btn btn-outline-warning btn-xs' href=?page=fedit_mesa&id_mesa=".$info['id_mesa']."> <i class='bx bxs-edit-alt'></i> </a>"; 
					echo "<button type='button' class='btn btn-outline-danger btn-xs' data-bs-toggle='modal' data-bs-target='#mdexcldisc".$info['id_mesa']."'><i class='bx bxs-trash'></i></button></td>";
					echo "
					<div class='modal fade' id='mdexcldisc".$info['id_mesa']."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
					<div class='modal-dialog'>
						<div class='modal-content'>
						<div class='modal-header'>
							<h1 class='modal-title fs-5' id='exampleModalLabel'>Excluir Tipo de mesa</h1>
							<button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
						</div>
						<div class='modal-body'>
							Tem certeza que deseja excluir esse tipo de mesa?
						</div>
						<div class='modal-footer'>
							<a href=?page=excluir_mesa&id_mesa=".$info['id_mesa']." class='btn btn-danger'> Excluir </a>
							<button type='button' class='btn btn-outline-danger' data-bs-dismiss='modal'>Cancelar</button>
						</div>
						</div>
					</div>
					</div>
					";
				}
				echo "</tr></tbody></table>";
			?>				
		</div>
	</div>
	<!-- PAGINAÇÃO -->
	<div id="bottom" class="row">
			<div class="col-md-12">
				<?php
					$sqlTotal 		= "select id_mesa from tipo_mesa;";
					$qrTotal  		= mysqli_query($con, $sqlTotal) or die (mysqli_error());
					$numTotal 		= mysqli_num_rows($qrTotal);
					$totalpagina = (ceil($numTotal/$quantidade)<=0) ? 1 : ceil($numTotal/$quantidade);

					$exibir = 3;

					$anterior = (($pagina-1) <= 0) ? 1 : $pagina - 1;
					$posterior = (($pagina+1) >= $totalpagina) ? $totalpagina : $pagina+1;

					echo "<ul class='pagination'>";
					echo "<li class='page-item'><a class='page-link' href='?page=lista_mesa&pagina=1'> Primeira</a></li> "; 
					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_mesa&pagina=$anterior\"> Anterior</a></li> ";

					echo "<li class='page-item'><a class='page-link' href='?page=lista_mesa&pagina=".$pagina."'><strong>".$pagina."</strong></a></li> ";

					for($i = $pagina+1; $i < $pagina+$exibir; $i++){
						if($i <= $totalpagina)
						echo "<li class='page-item'><a class='page-link' href='?page=lista_mesa&pagina=".$i."'> ".$i." </a></li> ";
					}

					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_mesa&pagina=$posterior\"> Pr&oacute;xima</a></li> ";
					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_mesa&pagina=$totalpagina\"> &Uacute;ltima</a></li></ul>";

				?>	
			</div>
	</div>
</div>
