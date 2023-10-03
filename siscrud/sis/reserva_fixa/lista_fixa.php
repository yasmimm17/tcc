<?php
	$nivel_necessario = 1;
	include "base/testa_nivel.php";
?>
<div id="main" class="container-fluid">
	<div id="top" class="row">
		<div class="col-md-10">
			<h2>Reservas</h2>
		</div>

		<div class="col-md-2">
			<!-- Chama o Formulário para adicionar reservas -->
			<a href="?page=fcad_fixa" class="btn btn-success pull-right h2"><i class='bx bx-plus-medical'></i> Reserva
			
			</a> 
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

				$data = mysqli_query($con, "select * from reserva_fixa order by id_reserva asc limit $inicio, $quantidade;") or die(mysqli_error("ERRO: ".$con));
				echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
				echo "<thead><tr>";
				echo "<td><strong>ID</strong></td>"; 
				echo "<td><strong>Horário</strong></td>"; 
				echo "<td><strong>Quantidade de pessoas</strong></td>"; 
				echo "<td><strong>Observação</strong></td>";
				echo "<td><strong>Celular para contato</strong></td>";
                    echo "<td><strong>Situação da reserva</strong></td>";
                    echo "<td><strong>ID do Restaurante</strong></td>";
                    echo "<td><strong>ID do Cliente</strong></td>";
				echo "<td class='actions justify-content-center'><strong>Ações</strong></td>"; 
				echo "</tr></thead><tbody>";
				while($info = mysqli_fetch_array($data)){ 
					echo "<tr>";
					echo "<td>".$info['id_reserva']."</td>";
					echo "<td>".$info['horario']."</td>";
					echo "<td>".$info['qtde_pessoas']."</td>";
					echo "<td>".$info['obs']." </td>";
					echo "<td>".$info['cel_contato']."</td>";
                         echo "<td>".$info['situacao_reserva']."</td>";
                         echo "<td>".$info['id_res']."</td>";
                         echo "<td>".$info['id_cli']."</td>";
					echo "<td class='actions btn-group btn-group-sm d-flex justify-content-center'>";
					echo "<a class='btn btn-outline-success btn-xs' href=?page=view_fixa&id_reserva=".$info['id_reserva']."> <i class='bx bxs-binoculars'></i> </a>";
					echo "<a class='btn btn-outline-warning btn-xs' href=?page=fedit_fixa&id_reserva=".$info['id_reserva']."> <i class='bx bxs-edit-alt'></i> </a>"; 
					echo "<button type='button' class='btn btn-outline-danger btn-xs' data-bs-toggle='modal' data-bs-target='#mdexclprod".$info['id_reserva']."'><i class='bx bxs-trash'></i></button></td>";
					echo "
					<div class='modal fade' id='mdexclprod".$info['id_reserva']."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
					<div class='modal-dialog'>
						<div class='modal-content'>
						<div class='modal-header'>
							<h1 class='modal-title fs-5' id='exampleModalLabel'>Excluir reserva</h1>
							<button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
						</div>
						<div class='modal-body'>
							Tem certeza que deseja excluir essa reserva?
						</div>
						<div class='modal-footer'>
							<a href=?page=excluir_fixa&id_reserva=".$info['id_reserva']." class='btn btn-danger'> Excluir </a>
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
					$sqlTotal 		= "select id_reserva from reserva_fixa;";
					$qrTotal  		= mysqli_query($con, $sqlTotal) or die (mysqli_error());
					$numTotal 		= mysqli_num_rows($qrTotal);
					$totalpagina = (ceil($numTotal/$quantidade)<=0) ? 1 : ceil($numTotal/$quantidade);

					$exibir = 3;

					$anterior = (($pagina-1) <= 0) ? 1 : $pagina - 1;
					$posterior = (($pagina+1) >= $totalpagina) ? $totalpagina : $pagina+1;

					echo "<ul class='pagination'>";
					echo "<li class='page-item'><a class='page-link' href='?page=lista_fixa&pagina=1'> Primeira</a></li> "; 
					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_fixa&pagina=$anterior\"> Anterior</a></li> ";

					echo "<li class='page-item'><a class='page-link' href='?page=lista_fixa&pagina=".$pagina."'><strong>".$pagina."</strong></a></li> ";

					for($i = $pagina+1; $i < $pagina+$exibir; $i++){
						if($i <= $totalpagina)
						echo "<li class='page-item'><a class='page-link' href='?page=lista_fixa&pagina=".$i."'> ".$i." </a></li> ";
					}

					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_fixa&pagina=$posterior\"> Pr&oacute;xima</a></li> ";
					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_fixa&pagina=$totalpagina\"> &Uacute;ltima</a></li></ul>";

				?>	
			</div>
	</div>
</div>
